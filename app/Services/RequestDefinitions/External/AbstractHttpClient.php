<?php

namespace App\Services\RequestDefinitions\External;

use App\Services\RequestDefinitions\RequestDefinition;
use Illuminate\Http\Request;
use Psr\Http\Message\RequestInterface;

abstract class AbstractHttpClient
{
    /**
     * Last request to allow implementation of generic request definition
     */
    protected ?RequestInterface $lastRequest = null;

    /**
     * Request definition for external guzzle client
     */
    protected ?RequestDefinition $definition = null;

    public function getCurrentMethod(): string
    {
        return $this->lastRequest?->getMethod() ?? Request::METHOD_GET;
    }

    public function getCurrentUrl(): string
    {
        return (string) ($this->lastRequest?->geturi() ?? '');
    }

    public function getCurrentHeaders(): array
    {
        return $this->lastRequest?->getHeaders() ?? [];
    }

    public function getCurrentPayload(): ?array
    {
        $payload = $this->lastRequest?->getBody();

        return $payload ? json_decode((string) $payload, true) : null;
    }

    public function getCurrentQueryParams(): array
    {
        $uri = $this->lastRequest?->getUri();

        if (!$uri) {
            return [];
        }

        parse_str($uri->getQuery(), $query);

        return $query;
    }

    public function setDefinition(RequestDefinition $definition): void
    {
        $this->definition = $definition;
    }
}
