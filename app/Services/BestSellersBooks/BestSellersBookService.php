<?php

namespace App\Services\BestSellersBooks;

use Exception;
use InvalidArgumentException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Services\Enums\ExternalService;
use App\Services\AbstractExternalService;
use App\Services\BestSellersBooks\DTO\Book;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\UnauthorizedException;
use App\Services\BestSellersBooks\Enums\BookList;
use Illuminate\Http\Client\Response as HttpResponse;
use App\Services\BestSellersBooks\DTO\BestSellersList;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Services\BestSellersBooks\RequestDefinitions\GetListsOverview;
use App\Services\BestSellersBooks\RequestDefinitions\GetBooksByListName;
use App\Services\BestSellersBooks\RequestDefinitions\GetBooksByListAndDate;

class BestSellersBookService extends AbstractExternalService
{
    public static function externalService(): ExternalService
    {
        return ExternalService::NewYorkTimesBestSellersBooks;
    }

    /** @return Collection<int, Book> */
    public function getBooks(): Collection
    {
        $response = $this->getListsOverview();

        $books = data_get($response, 'results.lists.*.books', []);

        return collect($books)->flatten(1)->mapInto(Book::class);
    }

    /** @return Collection<int, BestSellersList> */
    public function getLists(): Collection
    {
        $response = $this->getListsOverview();

        $lists = data_get($response, 'results.lists', []);

        return collect($lists)->mapInto(BestSellersList::class);
    }

    public function getListsOverview(Carbon|string|null $date = null): array|string
    {
        /**
         * @note: If the value passed into `Carbon::parse()` is null,
         * a date instance is returned similar to calling `now()`.
         * Calling `Carbon::make()` instead returns null in this case.
         *
         * Since the endpoint the request definition is hitting has an
         * optional param, the response will be skewed if we pass in
         * a null value - it would filter the results to only today
         * instead of a full overview.
         */
        $publishedDate = Carbon::make($date);

        $request = new GetListsOverview($publishedDate);

        $response = $request->send();

        if ($response->failed()) {
            $this->handleResponseErrors($response);
        }

        return $response->json();
    }

    /** @return Collection<int, Book> */
    public function getBooksByListName(BookList|string $bookList): Collection
    {
        $listName = BookList::tryFromMixed($bookList);

        if (is_null($listName)) {
            throw new InvalidArgumentException('Improper book list name provided');
        }

        $request = new GetBooksByListName($listName);

        $response = $request->send();

        if ($response->failed()) {
            $this->handleResponseErrors($response);
        }

        $books = data_get($response->json(), 'results.books', []);

        return collect($books)->mapInto(Book::class);
    }

    /** @return Collection<int, Book> */
    public function getBooksByListAndDate(
        BookList|string $bookList,
        Carbon|string $date,
    ): Collection {
        $listName = BookList::tryFromMixed($bookList);

        if (is_null($listName)) {
            throw new InvalidArgumentException('Improper book list name provided');
        }

        $publishedDate = Carbon::make($date);

        if (is_null($publishedDate)) {
            throw new InvalidArgumentException('Improper date provided');
        }

        $request = new GetBooksByListAndDate($listName, $publishedDate);

        $response = $request->send();

        if ($response->failed()) {
            $this->handleResponseErrors($response);
        }

        $books = data_get($response->json(), 'results.books', []);

        return collect($books)->mapInto(Book::class);
    }

    private function handleResponseErrors(HttpResponse $response)
    {
        $errors = data_get($response->json(), 'errors', []);

        $message = collect($errors)
            ->flatten()
            ->filter()
            ->implode(', ');

        return match ($response->status()) {
            Response::HTTP_UNAUTHORIZED => throw new UnauthorizedException(),
            Response::HTTP_NOT_FOUND => throw new NotFoundHttpException("Resource not found: {$message}"),
            default => throw new Exception('An unexpected error has occurred')
        };
    }
}
