<?php

namespace Tests\Unit\Services\RequestDefinitions\Middleware;

use App\Services\Enums\ExternalService;
use App\Services\RequestDefinitions\Middleware\CacheAware;
use App\Services\RequestDefinitions\RequestDefinition;
use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Psr7\Request as PsrRequest;
use GuzzleHttp\Psr7\Response as PsrResponse;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class CacheAwareTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Cache::flush();
    }

    private function makeDefinition(bool $cacheAware = false): RequestDefinition
    {
        $definition = new class extends RequestDefinition {
            public function method(): string
            {
                return self::HTTP_GET;
            }
            public function url(): string
            {
                return 'https://example.com/cache-test';
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

        if ($cacheAware) {
            $definition->cacheAware();
        }

        return $definition;
    }

    private function runMiddleware(RequestDefinition $definition, callable $handler): mixed
    {
        $middleware = new CacheAware($definition);

        $wrappedHandler = $middleware($handler);

        return $wrappedHandler(new PsrRequest('GET', 'https://example.com/cache-test'), []);
    }

    public function testPassesThroughToHandlerWhenNotCacheAware(): void
    {
        $definition = $this->makeDefinition(cacheAware: false);

        $psr7Response = new PsrResponse(200, [], '{"data": "fresh"}');

        $handlerCalled = false;

        $handler = function ($request, $options) use ($psr7Response, &$handlerCalled) {
            $handlerCalled = true;

            return new FulfilledPromise($psr7Response);
        };

        $this->runMiddleware($definition, $handler)->wait();

        $this->assertTrue($handlerCalled);
    }

    public function testCallsHandlerOnCacheMiss(): void
    {
        $definition = $this->makeDefinition(cacheAware: true);

        $handlerCalled = false;

        $handler = function ($request, $options) use (&$handlerCalled) {
            $handlerCalled = true;

            return new FulfilledPromise(new PsrResponse(200));
        };

        $this->runMiddleware($definition, $handler)->wait();

        $this->assertTrue($handlerCalled);
    }

    public function testStores2xxResponseInCacheOnCacheMiss(): void
    {
        $definition = $this->makeDefinition(cacheAware: true);

        $cacheKey = $definition->uniqueID();

        $handler = fn($request, $options) => new FulfilledPromise(new PsrResponse(200, [], '{"data": "fresh"}'));

        $this->runMiddleware($definition, $handler)->wait();

        $this->assertTrue(Cache::has($cacheKey));
    }

    public function testDoesNotCacheNon2xxResponses(): void
    {
        $definition = $this->makeDefinition(cacheAware: true);

        $cacheKey = $definition->uniqueID();

        $handler = fn($request, $options) => new FulfilledPromise(new PsrResponse(404));

        $this->runMiddleware($definition, $handler)->wait();

        $this->assertFalse(Cache::has($cacheKey));
    }

    public function testReturnsCachedResponseWithoutCallingHandlerOnCacheHit(): void
    {
        $definition = $this->makeDefinition(cacheAware: true);

        $cacheKey = $definition->uniqueID();

        // Pre-populate the cache with a serialised HTTP response
        $cachedResponse = new PsrResponse(200, ['Request-Definition-Cache-Hit' => 'HIT'], '{"data": "cached"}');

        Cache::put($cacheKey, Message::toString($cachedResponse), 3600);

        $handlerCalled = false;

        $handler = function ($request, $options) use (&$handlerCalled) {
            $handlerCalled = true;
            return new FulfilledPromise(new PsrResponse(200, [], '{"data": "fresh"}'));
        };

        $response = $this->runMiddleware($definition, $handler)->wait();

        $this->assertFalse($handlerCalled);

        $this->assertSame('HIT', $response->getHeaderLine('Request-Definition-Cache-Hit'));
    }

    public function testCachedResponseIncludesCacheHitHeader(): void
    {
        $definition = $this->makeDefinition(cacheAware: true);

        $cacheKey = $definition->uniqueID();

        // Warm the cache via a real request
        $handler = fn($request, $options) => new FulfilledPromise(new PsrResponse(200, [], '{"data": "fresh"}'));

        $this->runMiddleware($definition, $handler)->wait();

        // Now retrieve from cache and verify the header is baked in
        $cachedString = Cache::get($cacheKey);

        $cachedResponse = Message::parseResponse($cachedString);

        $this->assertSame('HIT', $cachedResponse->getHeaderLine('Request-Definition-Cache-Hit'));
    }
}
