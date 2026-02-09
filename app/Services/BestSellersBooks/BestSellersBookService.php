<?php

namespace App\Services\BestSellersBooks;

use App\Services\AbstractExternalService;
use App\Services\BestSellersBooks\DTO\BestSellersList;
use App\Services\BestSellersBooks\DTO\Book;
use App\Services\BestSellersBooks\Enums\BookList;
use App\Services\BestSellersBooks\RequestDefinitions\GetBooksByListAndDate;
use App\Services\BestSellersBooks\RequestDefinitions\GetBooksByListName;
use App\Services\BestSellersBooks\RequestDefinitions\GetListsOverview;
use App\Services\Enums\ExternalService;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;
use Illuminate\Validation\UnauthorizedException;
use InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BestSellersBookService extends AbstractExternalService
{
    public static function externalServiceID(): int
    {
        return self::externalService()->id();
    }

    public static function externalService(): ExternalService
    {
        return ExternalService::NewYorkTimesBooks;
    }

    public function getBooks(): Collection
    {
        $response = $this->getListsOverview();

        $books = data_get($response, 'results.lists.*.books', []);

        return collect($books)->flatten(1)->mapInto(Book::class);
    }

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

    private function handleResponseErrors($response)
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
