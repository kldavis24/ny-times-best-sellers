<?php

namespace App\Services\BestSellersBooks;

use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Services\Enums\ExternalService;
use App\Services\AbstractExternalService;
use App\Services\BestSellersBooks\DTO\Book;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\UnauthorizedException;
use App\Services\BestSellersBooks\Enums\ListName;
use Illuminate\Http\Client\Response as HttpResponse;
use App\Services\BestSellersBooks\DTO\BookList;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BestSellersBookService extends AbstractExternalService
{
    public static function externalService(): ExternalService
    {
        return ExternalService::NewYorkTimesBestSellersBooks;
    }

    /** @return Collection<int, Book> */
    public function getBooks(?Carbon $publishedDate = null): Collection
    {
        $response = $this->getListsOverview($publishedDate);

        $books = data_get($response, 'results.lists.*.books', []);

        return collect($books)->flatten(1)->mapInto(Book::class);
    }

    /** @return Collection<int, BookList> */
    public function getLists(?Carbon $publishedDate = null): Collection
    {
        $response = $this->getListsOverview($publishedDate);

        $lists = data_get($response, 'results.lists', []);

        return collect($lists)->mapInto(BookList::class);
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

        $params = [
            'api-key' => $this->key(),
            'published_date' => $publishedDate?->format('Y-m-d'),
        ];

        $cleanedParams = collect($params)->filter()->all();

        $response = Http::get(
            "{$this->externalUrl()}/svc/books/v3/lists/overview.json",
            $cleanedParams
        );

        if ($response->failed()) {
            $this->handleResponseErrors($response);
        }

        return $response->json();
    }

    /** @return Collection<int, Book> */
    public function getBooksByListName(ListName $listName): Collection
    {
        $response = Http::get(
            "{$this->externalUrl()}/svc/books/v3/lists/current/{$listName->value}.json",
            ['api-key' => $this->key()]
        );

        if ($response->failed()) {
            $this->handleResponseErrors($response);
        }

        $books = data_get($response->json(), 'results.books', []);

        return collect($books)->mapInto(Book::class);
    }

    /** @return Collection<int, Book> */
    public function getBooksByListNameAndDate(ListName $listName, Carbon $publishedDate): Collection
    {
        $date = $publishedDate->format('Y-m-d');

        $response = Http::get(
            "{$this->externalUrl()}/svc/books/v3/lists/{$date}/{$listName->value}.json",
            ['api-key' => $this->key()]
        );

        if ($response->failed()) {
            $this->handleResponseErrors($response);
        }

        $books = data_get($response->json(), 'results.books', []);

        return collect($books)->mapInto(Book::class);
    }

    private function key(): string
    {
        $key = config('services.nyt_books.api_key');

        if (is_null($key)) {
            throw new Exception(message: 'NYT Books external API key is not properly set.');
        }

        return $key;
    }

    private function externalUrl(): string
    {
        $url = config('services.nyt_books.api_url');

        if (is_null($url)) {
            throw new Exception(message: 'NYT Books external URL is not properly set.');
        }

        return $url;
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
