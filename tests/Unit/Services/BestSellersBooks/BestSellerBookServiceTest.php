<?php

namespace Tests\Unit\Services\BestSellersBooks;

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
    public function testGetListOverviewSuccess()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $response = (new BestSellersBookService())->getListsOverview();

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testGetListOverviewWithDate()
    {
        $payload = payload('nyt_best_sellers_books/list_overview/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $date = now()->subHours(3);

        $response = (new BestSellersBookService())->getListsOverview(date: $date);

        $this->assertIsArray($response);

        $results = data_get($response, 'results');

        $this->assertNotNull($results);
    }

    public function testGetListOverviewUnauthorized()
    {
        $this->expectException(UnauthorizedException::class);

        $payload = payload('nyt_best_sellers_books/list_overview/401.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_UNAUTHORIZED),
        ]);

        // Should throw the expected exception
        (new BestSellersBookService())->getListsOverview();
    }

    public function testGetListOverviewNotFound()
    {
        $this->expectException(NotFoundHttpException::class);
        $this->expectExceptionMessage('list not found');

        $payload = payload('nyt_best_sellers_books/list_overview/404.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        // Should throw the expected exception
        (new BestSellersBookService())->getListsOverview();
    }

    public function testGetBooksByListNameSuccess()
    {
        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $response = (new BestSellersBookService())->getBooksByListName($listName);

        $this->assertNotEmpty($response);
        $this->assertCount(count(data_get($payload, 'results.books', [])), $response);
    }

    public function testGetBooksByListNameUnauthorized()
    {
        $this->expectException(UnauthorizedException::class);

        $payload = payload('nyt_best_sellers_books/books_by_list_name/401.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_UNAUTHORIZED),
        ]);

        // Should throw the expected exception
        $listName = BookList::HardcoverNonfiction;

        (new BestSellersBookService())->getBooksByListName($listName);
    }

    public function testGetBooksByListNameNotFound()
    {
        $this->expectException(NotFoundHttpException::class);
        $this->expectExceptionMessage('list not found');

        $payload = payload('nyt_best_sellers_books/books_by_list_name/404.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        $listName = BookList::HardcoverNonfiction;

        // Should throw the expected exception
        (new BestSellersBookService())->getBooksByListName($listName);
    }

    public function testGetBooksByListNameThrowsWithInvalidList()
    {
        $this->expectException(InvalidArgumentException::class);

        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        // Should throw the expected exception
        (new BestSellersBookService())->getBooksByListName('invalid');
    }

    public function testGetBooksByListAndDateSuccess()
    {
        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_OK),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        $response = (new BestSellersBookService())->getBooksByListAndDate(
            bookList: $listName,
            date: $date,
        );

        $this->assertNotEmpty($response);
        $this->assertCount(count(data_get($payload, 'results.books', [])), $response);
    }

    public function testGetBooksByListAndDateUnauthorized()
    {
        $this->expectException(UnauthorizedException::class);

        $payload = payload('nyt_best_sellers_books/books_by_list_name/401.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_UNAUTHORIZED),
        ]);

        // Should throw the expected exception
        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        (new BestSellersBookService())->getBooksByListAndDate(
            bookList: $listName,
            date: $date,
        );
    }

    public function testGetBooksByListAndDateNotFound()
    {
        $this->expectException(NotFoundHttpException::class);
        $this->expectExceptionMessage('list not found');

        $payload = payload('nyt_best_sellers_books/books_by_list_name/404.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        $listName = BookList::HardcoverNonfiction;

        $date = Carbon::make('2025-06-06');

        (new BestSellersBookService())->getBooksByListAndDate(
            bookList: $listName,
            date: $date,
        );
    }

    public function testGetBooksByListAndDateThrowsWithInvalidList()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Improper book list name provided');

        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        $date = Carbon::make('2025-06-06');

        (new BestSellersBookService())->getBooksByListAndDate(
            bookList: 'invalid',
            date: $date,
        );
    }

    public function testGetBooksByListAndDateThrowsWithInvalidDate()
    {
        $this->expectException(InvalidArgumentException::class);

        $payload = payload('nyt_best_sellers_books/books_by_list_name/success.json');

        Http::fake([
            'api.nytimes.com/*' => Http::response($payload, Response::HTTP_NOT_FOUND),
        ]);

        $listName = BookList::HardcoverNonfiction;

        (new BestSellersBookService())->getBooksByListAndDate(
            bookList: $listName,
            date: 'invalid',
        );
    }
}
