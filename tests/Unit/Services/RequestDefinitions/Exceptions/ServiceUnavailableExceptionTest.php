<?php

namespace Tests\Unit\Services\RequestDefinitions\Exceptions;

use App\Services\RequestDefinitions\Exceptions\ServiceUnavailableException;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Tests\TestCase;

class ServiceUnavailableExceptionTest extends TestCase
{
    public function testHasDefaultMessage(): void
    {
        $exception = new ServiceUnavailableException();

        $this->assertSame(ServiceUnavailableException::DEFAULT_MESSAGE, $exception->getMessage());
    }

    public function testProvidesFallbackRequestWhenNoneGiven(): void
    {
        $exception = new ServiceUnavailableException();

        $this->assertSame('not-available', (string) $exception->getRequest()->getUri());
    }

    public function testProvidesFallbackResponseWhenNoneGiven(): void
    {
        $exception = new ServiceUnavailableException();

        $this->assertSame(503, $exception->getResponse()->getStatusCode());
    }

    public function testAcceptsCustomMessage(): void
    {
        $exception = new ServiceUnavailableException('Custom service error.');

        $this->assertSame('Custom service error.', $exception->getMessage());
    }

    public function testAcceptsCustomRequest(): void
    {
        $request = new Request('POST', 'https://api.example.com/endpoint');

        $exception = new ServiceUnavailableException(request: $request);

        $this->assertSame($request, $exception->getRequest());
    }

    public function testAcceptsCustomResponse(): void
    {
        $response = new Response(503, [], 'Service Unavailable');

        $exception = new ServiceUnavailableException(response: $response);

        $this->assertSame($response, $exception->getResponse());
    }

    public function testExtendsGuzzleBadResponseException(): void
    {
        $exception = new ServiceUnavailableException();

        $this->assertInstanceOf(BadResponseException::class, $exception);
    }
}
