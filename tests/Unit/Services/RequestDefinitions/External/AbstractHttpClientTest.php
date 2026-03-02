<?php

namespace Tests\Unit\Services\RequestDefinitions\External;

use App\Services\RequestDefinitions\External\AbstractHttpClient;
use GuzzleHttp\Psr7\Request as PsrRequest;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\RequestInterface;
use Tests\TestCase;

/**
 * Concrete subclass used solely to expose the protected $lastRequest property for testing.
 */
class TestableHttpClient extends AbstractHttpClient
{
    public function setLastRequest(?RequestInterface $request): void
    {
        $this->lastRequest = $request;
    }
}

class AbstractHttpClientTest extends TestCase
{
    private function makeClient(): TestableHttpClient
    {
        return new TestableHttpClient();
    }

    public function testGetCurrentMethodReturnsGetWhenNoRequestIsSet(): void
    {
        $this->assertSame('GET', $this->makeClient()->getCurrentMethod());
    }

    public function testGetCurrentMethodReturnsMethodFromRequest(): void
    {
        $client = $this->makeClient();

        $client->setLastRequest(new PsrRequest('POST', 'https://example.com'));

        $this->assertSame('POST', $client->getCurrentMethod());
    }

    public function testGetCurrentUrlReturnsEmptyStringWhenNoRequestIsSet(): void
    {
        $this->assertSame('', $this->makeClient()->getCurrentUrl());
    }

    public function testGetCurrentUrlReturnsUriStringFromRequest(): void
    {
        $client = $this->makeClient();

        $client->setLastRequest(new PsrRequest('GET', 'https://api.example.com/v1/endpoint'));

        $this->assertSame('https://api.example.com/v1/endpoint', $client->getCurrentUrl());
    }

    public function testGetCurrentHeadersReturnsEmptyArrayWhenNoRequestIsSet(): void
    {
        $this->assertSame([], $this->makeClient()->getCurrentHeaders());
    }

    public function testGetCurrentHeadersReturnsHeadersFromRequest(): void
    {
        $client = $this->makeClient();

        $client->setLastRequest(
            new PsrRequest('GET', 'https://example.com', ['X-Api-Key' => 'secret'])
        );

        $headers = $client->getCurrentHeaders();

        $this->assertArrayHasKey('X-Api-Key', $headers);

        $this->assertSame(['secret'], $headers['X-Api-Key']);
    }

    public function testGetCurrentPayloadReturnsNullWhenNoRequestIsSet(): void
    {
        $this->assertNull($this->makeClient()->getCurrentPayload());
    }

    public function testGetCurrentPayloadReturnsDecodedJsonFromRequestBody(): void
    {
        $client = $this->makeClient();

        $body = Utils::streamFor('{"name": "test", "value": 42}');

        $client->setLastRequest(new PsrRequest('POST', 'https://example.com', [], $body));

        $this->assertSame(['name' => 'test', 'value' => 42], $client->getCurrentPayload());
    }

    public function testGetCurrentPayloadReturnsNullForNonJsonBody(): void
    {
        $client = $this->makeClient();

        $body = Utils::streamFor('not-json');

        $client->setLastRequest(new PsrRequest('POST', 'https://example.com', [], $body));

        $this->assertNull($client->getCurrentPayload());
    }

    public function testGetCurrentQueryParamsReturnsEmptyArrayWhenNoRequestIsSet(): void
    {
        $this->assertSame([], $this->makeClient()->getCurrentQueryParams());
    }

    public function testGetCurrentQueryParamsReturnsEmptyArrayWhenNoQueryString(): void
    {
        $client = $this->makeClient();

        $client->setLastRequest(new PsrRequest('GET', 'https://example.com'));

        $this->assertSame([], $client->getCurrentQueryParams());
    }

    public function testGetCurrentQueryParamsReturnsParsedQueryString(): void
    {
        $client = $this->makeClient();

        $client->setLastRequest(new PsrRequest('GET', 'https://example.com?foo=bar&baz=qux'));

        $this->assertSame(['foo' => 'bar', 'baz' => 'qux'], $client->getCurrentQueryParams());
    }

    public function testGetCurrentQueryParamsHandlesArrayParams(): void
    {
        $client = $this->makeClient();

        $client->setLastRequest(new PsrRequest('GET', 'https://example.com?ids[]=1&ids[]=2'));

        $params = $client->getCurrentQueryParams();

        $this->assertArrayHasKey('ids', $params);

        $this->assertSame(['1', '2'], $params['ids']);
    }
}
