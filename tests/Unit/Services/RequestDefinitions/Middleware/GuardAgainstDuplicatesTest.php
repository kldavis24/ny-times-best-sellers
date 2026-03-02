<?php

namespace Tests\Unit\Services\RequestDefinitions\Middleware;

use App\Services\Enums\ExternalService;
use App\Services\RequestDefinitions\Exceptions\DuplicateRequestException;
use App\Services\RequestDefinitions\Middleware\GuardAgainstDuplicates;
use App\Services\RequestDefinitions\RequestDefinition;
use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Psr7\Request as PsrRequest;
use GuzzleHttp\Psr7\Response as PsrResponse;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class GuardAgainstDuplicatesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Cache::flush();
    }

    private function makeDefinition(string $url = 'https://example.com'): RequestDefinition
    {
        return new class($url) extends RequestDefinition {
            public function __construct(private readonly string $httpUrl) {}
            public function method(): string
            {
                return self::HTTP_GET;
            }
            public function url(): string
            {
                return $this->httpUrl;
            }
            public function rules(): array
            {
                return [];
            }
            public function externalService(): ?ExternalService
            {
                return null;
            }
        };
    }

    public function testCallsHandlerAndReturnsResponseWhenUnderLimit(): void
    {
        $definition = $this->makeDefinition('https://example.com/guard-under-limit');

        $psr7Response = new PsrResponse(200);

        $handlerCalled = false;

        $handler = function ($request, $options) use ($psr7Response, &$handlerCalled) {
            $handlerCalled = true;

            return new FulfilledPromise($psr7Response);
        };

        $middleware = new GuardAgainstDuplicates($definition);

        $wrappedHandler = $middleware($handler);

        $wrappedHandler(new PsrRequest('GET', $definition->url()), [])->wait();

        $this->assertTrue($handlerCalled);
    }

    public function testThrowsDuplicateRequestExceptionOnceRateLimitIsExceeded(): void
    {
        $this->expectException(DuplicateRequestException::class);

        $definition = $this->makeDefinition('https://example.com/guard-over-limit');

        $maxAttempts = $definition->maxExecutionsWithinDecayWindow();

        $handler = fn($request, $options) => new FulfilledPromise(new PsrResponse(200));

        $middleware = new GuardAgainstDuplicates($definition);

        $wrappedHandler = $middleware($handler);

        $psr7Request = new PsrRequest('GET', $definition->url());

        // Exhaust the allowed limit, then trigger the exception
        for ($i = 0; $i <= $maxAttempts; $i++) {
            $wrappedHandler($psr7Request, [])->wait();
        }
    }
}
