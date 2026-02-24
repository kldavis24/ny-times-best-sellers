<?php

namespace App\Services\RequestDefinitions;

use App\Services\RequestDefinitions\Middleware\GuardAgainstDuplicates;
use App\Services\RequestDefinitions\Traits\AlwaysConsideredUnique;
use BadMethodCallException;
use Closure;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use ReflectionClass;
use RuntimeException;

abstract class RequestDefinition extends GenericRequestDefinition
{
    public const HTTP_GET = 'GET';
    public const HTTP_POST = 'POST';
    public const HTTP_PUT = 'PUT';
    public const HTTP_PATCH = 'PATCH';
    public const HTTP_DELETE = 'DELETE';
    public const HTTP_HEAD = 'HEAD';
    public const HTTP_OPTIONS = 'OPTIONS';

    private bool $isCacheAware = false;

    private Closure $requestResolver;

    /**
     * Query string params to apply to the request.
     *
     * @link https://docs.guzzlephp.org/en/stable/request-options.html#query
     */
    public function queryParams(): array
    {
        return [];
    }

    /**
     * Headers to apply to the request.
     *
     * @link https://docs.guzzlephp.org/en/stable/request-options.html#headers
     */
    public function headers(): array
    {
        return [];
    }

    /**
     * Combine the form params, json data, and query string params
     * into a single array to be used to validate the request.
     */
    protected function validationData(): array
    {
        return array_merge(parent::validationData(), $this->queryParams());
    }

    /**
     * @throws \BadMethodCallException when the request definition is not allowed to be cache-aware.
     */
    final public function cacheAware(): static
    {
        if ($this->method() !== self::HTTP_GET) {
            throw new BadMethodCallException(
                'Only GET requests can be cache aware.',
            );
        }

        if (in_array(AlwaysConsideredUnique::class, class_uses_recursive($this))) {
            throw new BadMethodCallException(
                'Classes using ' .
                    AlwaysConsideredUnique::class .
                    ' cannot be cache aware.',
            );
        }

        $this->isCacheAware = true;

        return $this;
    }

    public function isCacheAware(): bool
    {
        return $this->isCacheAware;
    }

    public function cacheTtl(): int
    {
        return config('cache.ttl.request_definition');
    }

    /**
     * Attempt to build a PendingRequest instance based on this class definition.
     *
     * Guzzle request options can be passed to merge with those set on the definition.
     *
     * This method will throw a ValidationException if the data for the
     * request does not pass all validation rules set on the definition.
     */
    public function buildRequest(array $options = []): PendingRequest
    {
        $request = $this->validate()
            ->createNewRequest()
            ->withMiddleware(new Middleware\CacheAware($this))
            ->withMiddleware(new GuardAgainstDuplicates($this))
            ->withMiddleware(new Middleware\CheckServiceAvailability($this))
            ->withHeaders($this->headers())
            ->timeout($this->timeout())
            ->withOptions($this->allOptions())
            ->withOptions($options)
            ->withOptions([
                'query' => $this->queryParams(),
            ]);

        foreach ($this->middleware() as $middleware) {
            $request->withMiddleware($middleware);
        }

        if (
            config('app.debug') &&
            !(new ReflectionClass($this))->isAnonymous()
        ) {
            $request->withHeaders(['Request-Definition' => static::class]);
        }

        return $request;
    }

    public function middleware(): array
    {
        return [];
    }

    /**
     * Use Guzzle's 'sink' abilty to dump the response content into storage.
     */
    public function saveToFile(string $filePath): self
    {
        return $this->addOptions(['sink' => $filePath]);
    }

    /**
     * Manually customize options for the request.
     *
     * @link https://docs.guzzlephp.org/en/stable/request-options.html
     */
    public function options(): array
    {
        return [];
    }

    /**
     * After how many seconds should Guzzle kill the request?
     */
    public function timeout(): int
    {
        return 150;
    }

    /**
     * Convert the definition into a PendingRequest instance.
     */
    public function send(): Response|PromiseInterface
    {
        $request = $this->buildRequest();

        $method = strtolower($this->method());

        if ($this->method() === self::HTTP_GET && !is_null($this->payload())) {
            throw new RuntimeException(
                'The ' .
                    static::class .
                    ' should use \'queryParams\' method instead ' .
                    'of \'payload\' to set request data.',
            );
        }

        // This match - conditionally sending a payload depending on the HTTP method -
        // is a workaround for a breaking change in Laravel 9.4
        //
        // If we pass null payload to GET method from `payload()`, effectively
        // `->get($url, null)`, it will now wipe out any previously set options
        // for the queryParams.
        //
        // @link https://github.com/laravel/framework/commit/a54f48102deea2864071e510172fe0b22a1c1d5a
        return match ($this->method()) {
            self::HTTP_GET, self::HTTP_HEAD => $request->{$method}(
                $this->url(),
            ),
            default => $request->{$method}($this->url(), $this->payload()),
        };
    }

    /**
     * Set a function that returns a base PendingRequest instance the
     * definition should use as the starting point when building new requests.
     */
    public function setRequestResolver(Closure $resolver): self
    {
        $this->requestResolver = $resolver;

        return $this;
    }

    /**
     * Set the request resolver to one that expects/interprets
     * the body as multipart/form-data.
     *
     * Guzzle will properly set the Content-Type header with
     * correct boundary for the request.
     */
    public function asMultipart(): self
    {
        return $this->setRequestResolver(fn() => Http::asMultipart());
    }

    /**
     * Set the request resolver to one that expects/interprets
     * thebody as application/x-www-form-urlencoded form data.
     *
     * Guzzle will properly set the Content-Type header for the request.
     */
    public function asForm(): self
    {
        return $this->setRequestResolver(fn() => Http::asForm());
    }

    /**
     * Fetch the closure that defines the origin of the PendingRequest
     * the definition should use to build up a request
     */
    public function getRequestResolver(): Closure
    {
        return $this->requestResolver ?? fn() => Http::asJson();
    }

    /**
     * Create a new PendingRequest instance by calling through
     * to the current set request resolver.
     */
    public function createNewRequest(): PendingRequest
    {
        return call_user_func($this->getRequestResolver());
    }

    /**
     * Generate a unique identifier for the request.
     *
     * This is used to track and prevent identical/duplicate
     * calls from being processed in quick succession.
     */
    public function uniqueID(): string
    {
        $parts = [
            get_class($this),
            $this->method(),
            $this->url(),
            json_encode($this->payload()),
            json_encode($this->headers()),
            json_encode($this->queryParams()),
        ];

        return md5(implode(':', $parts));
    }

    /**
     * The HTTP method to use when sending the request.
     */
    abstract public function method(): string;

    /**
     * The URL (or endpoint if the base URL has been previously set
     * on the request) to send the request to.
     */
    abstract public function url(): string;
}
