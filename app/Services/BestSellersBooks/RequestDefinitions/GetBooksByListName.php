<?php

namespace App\Services\BestSellersBooks\RequestDefinitions;

use App\Services\BestSellersBooks\Enums\BookList;

class GetBooksByListName extends AbstractRequestDefinition
{
    public function __construct(protected BookList $listName)
    {
        //
    }

    public function url(): string
    {
        $baseUrl = config('services.nyt_books.api_url');

        return "{$baseUrl}/svc/books/v3/lists/current/{$this->listName->value}.json";
    }
}
