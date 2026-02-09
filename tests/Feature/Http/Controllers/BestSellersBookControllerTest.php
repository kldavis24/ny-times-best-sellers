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
        $response = $this->getJson(route('v1.books_by_list', ['list' => 'invalid']));

        $response->assertUnprocessable();

        $errors = data_get($response, 'errors');

        $this->assertArrayHasKey('list', $errors);

        $this->assertEquals('The selected list is invalid.', data_get($errors, 'list.0'));
    }

    public function testBooksByListNameAndDateValidation()
    {
        $response = $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => 'invalid', 'date' => 'invalid']
            )
        );

        $response->assertUnprocessable();

        $errors = data_get($response, 'errors');

        $this->assertArrayHasKey('published_date', $errors);
        $this->assertArrayHasKey('list', $errors);

        $list = BookList::ChildrensMiddleGradeHardcover;

        $response = $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => $list, 'date' => 'invalid']
            )
        );

        $response->assertUnprocessable();

        $errors = data_get($response, 'errors');

        $this->assertArrayHasKey('published_date', $errors);
        $this->assertArrayNotHasKey('list', $errors);

        $date = now()->subMonth(1);

        // We expect this 422 due to the date above not meeting the format expectations
        $response = $this->getJson(
            route(
                'v1.books_by_list_and_date',
                ['list' => $list, 'date' => $date]
            )
        );

        $response->assertUnprocessable();

        $errors = data_get($response, 'errors');

        $this->assertArrayHasKey('published_date', $errors);
        $this->assertArrayNotHasKey('list', $errors);

        $this->assertEquals(
            'The published date field must match the format Y-m-d.',
            data_get($errors, 'published_date.0')
        );
    }
}
