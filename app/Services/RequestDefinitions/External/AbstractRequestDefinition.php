<?php

namespace App\Services\RequestDefinitions\External;

use App\Services\RequestDefinitions\RequestDefinition;
use App\Services\RequestDefinitions\External\AbstractHttpClient;

abstract class AbstractRequestDefinition extends RequestDefinition
{
    public function __construct(
        protected AbstractHttpClient $httpClient,
    ) {
        //
    }

    public function rules(): array
    {
        return [];
    }

    public function method(): string
    {
        return $this->httpClient->getCurrentMethod();
    }

    public function url(): string
    {
        return $this->httpClient->getCurrentUrl();
    }

    public function headers(): array
    {
        return $this->httpClient->getCurrentHeaders();
    }

    public function payload(): ?array
    {
        return $this->httpClient->getCurrentPayload();
    }

    public function queryParams(): array
    {
        return $this->httpClient->getCurrentQueryParams();
    }
}
