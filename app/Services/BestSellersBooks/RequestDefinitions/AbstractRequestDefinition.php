<?php

namespace App\Services\BestSellersBooks\RequestDefinitions;

use App\Services\RequestDefinitions\RequestDefinition;
use App\Services\Enums\ExternalService;
use App\Services\BestSellersBooks\BestSellersBookService;

abstract class AbstractRequestDefinition extends RequestDefinition
{
    public function method(): string
    {
        return self::HTTP_GET;
    }

    public function queryParams(): array
    {
        return [
            'api-key' => config('services.nyt_books.api_key')
        ];
    }

    public function rules(): array
    {
        return [];
    }

    public function externalServiceID(): ?int
    {
        return BestSellersBookService::externalServiceID();
    }

    public function externalService(): ?ExternalService
    {
        return BestSellersBookService::externalService();
    }
}
