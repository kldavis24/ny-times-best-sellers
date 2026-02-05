<?php

namespace App\Services\BestSellersBooks\RequestDefinitions;

use Illuminate\Support\Carbon;

class GetListsOverview extends AbstractRequestDefinition
{
    public function __construct(protected ?Carbon $publishedDate)
    {
        //
    }

    public function url(): string
    {
        $baseUrl = config('services.nyt_books.api_url');

        return "{$baseUrl}/svc/books/v3/lists/overview.json";
    }

    public function queryParams(): array
    {
        return [
            'api-key' => config('services.nyt_books.api_key'),
            'published_date' => $this->publishedDate(),
        ];
    }

    private function publishedDate(): ?string
    {
        return $this->publishedDate?->format('Y-m-d');
    }
}
