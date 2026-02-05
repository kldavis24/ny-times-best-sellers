<?php

namespace Tests\Unit;

use App\Services\BestSellersBooks\BestSellersBookService;
use App\Services\BestSellersBooks\Enums\BookList;
use Illuminate\Support\Carbon;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\UnauthorizedException;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BestSellerBookServiceTest extends TestCase
{
    public function testFetchListOverviewSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $response = (new BestSellersBookService())->fetchListsOverview(asJson: false);

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testFetchListOverviewAsJson()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        // the `fetchListsOverview()` asJson argument defaults to `true`
        $response = (new BestSellersBookService())->fetchListsOverview();

        $this->assertIsString($response);
        $this->assertJson($response);

        $results = data_get(json_decode($response), 'results');

        $this->assertNotNull($results);
    }

    public function testFetchListOverviewAsArray()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $response = (new BestSellersBookService())->fetchListsOverview(asJson: false);

        $this->assertIsArray($response);

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testFetchListOverviewWithDate()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $date = now()->subHours(3);

        $response = (new BestSellersBookService())->fetchListsOverview(date: $date, asJson: false);

        $this->assertIsArray($response);

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testFetchListOverviewUnauthorized()
    {
        $this->expectException(UnauthorizedException::class);

        $payload = payload('nyt_best_sellers_books/list_overview/401.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_UNAUTHORIZED),
        ]);

        // Should throw the expected exception
        (new BestSellersBookService())->fetchListsOverview();
    }

    public function testFetchListOverviewNotFound()
    {
        $this->expectException(NotFoundHttpException::class);
        $this->expectExceptionMessage('list not found');

        $payload = payload('nyt_best_sellers_books/list_overview/404.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        // Should throw the expected exception
        (new BestSellersBookService())->fetchListsOverview();
    }

    public function testFetchBooksByListNameSuccess()
    {
        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $response = (new BestSellersBookService())->fetchBooksByListName(bookList: $listName, asJson: false);

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testFetchBooksByListNameAsJson()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $response = (new BestSellersBookService())->fetchBooksByListName(bookList: $listName);

        $this->assertIsString($response);
        $this->assertJson($response);

        $results = data_get(json_decode($response), 'results');

        $this->assertNotNull($results);
    }

    public function testFetchBooksByListNameAsArray()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $response = (new BestSellersBookService())->fetchBooksByListName(bookList: $listName, asJson: false);

        $this->assertIsArray($response);

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testFetchBooksByListNameUnauthorized()
    {
        $this->expectException(UnauthorizedException::class);

        $payload = payload('nyt_best_sellers_books/books_by_list_name/401.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_UNAUTHORIZED),
        ]);

        // Should throw the expected exception
        $listName = BookList::HardcoverNonfiction;

        (new BestSellersBookService())->fetchBooksByListName(bookList: $listName);
    }

    public function testFetchBooksByListNameNotFound()
    {
        $this->expectException(NotFoundHttpException::class);
        $this->expectExceptionMessage('list not found');

        $payload = payload('nyt_best_sellers_books/books_by_list_name/404.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        $listName = BookList::HardcoverNonfiction;

        // Should throw the expected exception
        (new BestSellersBookService())->fetchBooksByListName(bookList: $listName);
    }

    public function testFetchBooksByListNameThrowsWithInvalidList()
    {
        $this->expectException(InvalidArgumentException::class);

        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        // Should throw the expected exception
        (new BestSellersBookService())->fetchBooksByListName('invalid');
    }

    public function testFetchBooksByListAndDateSuccess()
    {
        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        $response = (new BestSellersBookService())->fetchBooksByListAndDate(
            bookList: $listName,
            date: $date,
            asJson: false
        );

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testFetchBooksByListAndDateAsJson()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        $response = (new BestSellersBookService())->fetchBooksByListAndDate(
            bookList: $listName,
            date: $date,
        );

        $this->assertIsString($response);
        $this->assertJson($response);

        $results = data_get(json_decode($response), 'results');

        $this->assertNotNull($results);
    }

    public function testFetchBooksByListAndDateAsArray()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        $response = (new BestSellersBookService())->fetchBooksByListAndDate(
            bookList: $listName,
            date: $date,
            asJson: false
        );

        $this->assertIsArray($response);

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testFetchBooksByListAndDateUnauthorized()
    {
        $this->expectException(UnauthorizedException::class);

        $payload = payload('nyt_best_sellers_books/books_by_list_name/401.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_UNAUTHORIZED),
        ]);

        // Should throw the expected exception
        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        (new BestSellersBookService())->fetchBooksByListAndDate(
            bookList: $listName,
            date: $date,
            asJson: false
        );
    }

    public function testFetchBooksByListAndDateNotFound()
    {
        $this->expectException(NotFoundHttpException::class);
        $this->expectExceptionMessage('list not found');

        $payload = payload('nyt_best_sellers_books/books_by_list_name/404.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        (new BestSellersBookService())->fetchBooksByListAndDate(
            bookList: $listName,
            date: $date,
            asJson: false
        );
    }

    public function testFetchBooksByListAndDateThrowsWithInvalidList()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Improper book list name provided');

        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        $date = Carbon::make('2025-06-06');

        (new BestSellersBookService())->fetchBooksByListAndDate(
            bookList: 'invalid',
            date: $date,
            asJson: false
        );
    }

    public function testFetchBooksByListAndDateThrowsWithInvalidDate()
    {
        $this->expectException(InvalidArgumentException::class);

        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        (new BestSellersBookService())->fetchBooksByListAndDate(
            bookList: $listName,
            date: 'invalid',
            asJson: false
        );
    }
}
