<?php

namespace Tests\Unit\Services\RequestDefinitions\Middleware;

use App\Services\Enums\ExternalService;
use App\Services\RequestDefinitions\Exceptions\ServiceUnavailableException;
use App\Services\RequestDefinitions\Middleware\CheckServiceAvailability;
use App\Services\RequestDefinitions\RequestDefinition;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Promise\RejectedPromise;
use GuzzleHttp\Psr7\Request as PsrRequest;
use GuzzleHttp\Psr7\Response as PsrResponse;
use Tests\TestCase;

class CheckServiceAvailabilityTest extends TestCase
{
    private function makeDefinition(): RequestDefinition
    {
        return new class extends RequestDefinition {
            public function method(): string
            {
                return self::HTTP_GET;
            }
            public function url(): string
            {
                return 'https://example.com';
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

    private function runMiddleware(callable $handler): mixed
    {
        $psr7Request = new PsrRequest('GET', 'https://example.com');

        $middleware = new CheckServiceAvailability($this->makeDefinition());

        $wrappedHandler = $middleware($handler);

        return $wrappedHandler($psr7Request, []);
    }

    public function testPassesThroughFor200Response(): void
    {
        $psr7Response = new PsrResponse(200, [], '{"data": "ok"}');

        $handler = fn($request, $options) => new FulfilledPromise($psr7Response);

        $response = $this->runMiddleware($handler)->wait();

        $this->assertSame(200, $response->getStatusCode());
    }

    public function testThrowsServiceUnavailableExceptionFor500(): void
    {
        $this->expectException(ServiceUnavailableException::class);

        $handler = fn($request, $options) => new FulfilledPromise(new PsrResponse(500));

        $this->runMiddleware($handler)->wait();
    }

    public function testThrowsServiceUnavailableExceptionFor502(): void
    {
        $this->expectException(ServiceUnavailableException::class);

        $handler = fn($request, $options) => new FulfilledPromise(new PsrResponse(502));

        $this->runMiddleware($handler)->wait();
    }

    public function testThrowsServiceUnavailableExceptionFor503(): void
    {
        $this->expectException(ServiceUnavailableException::class);

        $handler = fn($request, $options) => new FulfilledPromise(new PsrResponse(503));

        $this->runMiddleware($handler)->wait();
    }

    public function testThrowsServiceUnavailableExceptionFor504(): void
    {
        $this->expectException(ServiceUnavailableException::class);

        $handler = fn($request, $options) => new FulfilledPromise(new PsrResponse(504));

        $this->runMiddleware($handler)->wait();
    }

    public function testPassesThroughFor201Response(): void
    {
        $psr7Response = new PsrResponse(201, [], '{"created": true}');

        $handler = fn($request, $options) => new FulfilledPromise($psr7Response);

        $response = $this->runMiddleware($handler)->wait();

        $this->assertSame(201, $response->getStatusCode());
    }

    public function testRethrowsUnrelatedRejectionException(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Connection refused');

        $handler = fn($request, $options) => new RejectedPromise(new \RuntimeException('Connection refused'));

        $this->runMiddleware($handler)->wait();
    }

    public function testThrowsServiceUnavailableWhenRejectedWithBadResponseFor503(): void
    {
        $this->expectException(ServiceUnavailableException::class);

        $psr7Request = new PsrRequest('GET', 'https://example.com');

        $psr7Response = new PsrResponse(503);

        $exception = new BadResponseException('Service Unavailable', $psr7Request, $psr7Response);

        $handler = fn($request, $options) => new RejectedPromise($exception);

        $this->runMiddleware($handler)->wait();
    }
}
