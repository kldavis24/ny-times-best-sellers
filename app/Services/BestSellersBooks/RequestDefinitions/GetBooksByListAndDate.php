<?php

namespace App\Services\BestSellersBooks\RequestDefinitions;

use App\Services\BestSellersBooks\Enums\ListName;
use Illuminate\Support\Carbon;

class GetBooksByListAndDate extends AbstractRequestDefinition
{
    public function __construct(
        protected ListName $listName,
        protected Carbon $date
    ) {
        //
    }

    public function url(): string
    {
        $baseUrl = config('services.nyt_books.api_url');

        $endpoint = "/svc/books/v3/lists/{$this->date()}/{$this->listName()}.json";

        return $baseUrl . $endpoint;
    }

    private function date(): string
    {
        return $this->date->format('Y-m-d');
    }

    private function listName(): string
    {
        return $this->listName->value;
    }
}
