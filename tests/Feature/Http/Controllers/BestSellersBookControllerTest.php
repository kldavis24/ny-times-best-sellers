<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Resources\BestSellersListResource;
use App\Http\Resources\BookResource;
use App\Services\BestSellersBooks\DTO\BestSellersList;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use App\Services\BestSellersBooks\DTO\Book;
use App\Services\BestSellersBooks\Enums\BookList;
use Tests\TestCase;

class BestSellersBookControllerTest extends TestCase
{
    public function testBooksSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        $lists = data_get($payload, 'results.lists.*.books');

        $books = collect($lists)
            ->flatten(1)
            ->mapInto(Book::class);

        $expected = BookResource::collection($books)
            ->response()
            ->getData(true);

        $response = $this->getJson(route('v1.books'));

        $response
            ->assertOk()
            ->assertExactJson($expected);
    }

    public function testListsSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        $overview = data_get($payload, 'results.lists', []);

        $lists = collect($overview)->mapInto(BestSellersList::class);;

        $expected = BestSellersListResource::collection($lists)
            ->response()
            ->getData(true);

        $response = $this->getJson(route('v1.lists'));

        $response
            ->assertOk()
            ->assertExactJson($expected);
    }

    public function testBooksByListNameSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        $lists = data_get($payload, 'results.books', []);

        $books = collect($lists)->mapInto(BestSellersList::class);;

        $expected = BookResource::collection($books)
            ->response()
            ->getData(true);

        $response = $this->getJson(route('v1.books_by_list', ['list' => BookList::AudioFiction]));

        $response
            ->assertOk()
            ->assertExactJson($expected);
    }

    public function testBooksByListNameAndDateSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response(collect($payload), Response::HTTP_OK),
        ]);

        $lists = data_get($payload, 'results.books', []);

        $books = collect($lists)->mapInto(BestSellersList::class);;

        $expected = BookResource::collection($books)
            ->response()
            ->getData(true);

        $list = BookList::AudioFiction;

        $date = now()->subMonth(2)->format('Y-m-d');

        $response = $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => $list, 'date' => $date]
            )
        );

        $response
            ->assertOk()
            ->assertExactJson($expected);
    }

    public function testBooksByListNameValidation()
    {
        $this->getJson(route('v1.books_by_list', ['list' => 'invalid']))
            ->assertUnprocessable();
    }

    public function testBooksByListNameAndDateValidation()
    {
        $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => 'invalid', 'date' => 'invalid']
            )
        )->assertUnprocessable();

        $list = BookList::ChildrensMiddleGradeHardcover;

        $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => $list, 'date' => 'invalid']
            )
        )->assertUnprocessable();

        $date = now()->subMonth(1);

        // We expect this 422 due to the date above not meeting the format expectations
        $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => $list, 'date' => $date]
            )
        )->assertUnprocessable();
    }
}
