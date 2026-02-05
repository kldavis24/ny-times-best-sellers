<?php

namespace App\Services\BestSellersBooks;

use App\Services\AbstractExternalService;
use App\Services\BestSellersBooks\DTO\BestSellersList;
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
    public function fetchListsOverview(
        Carbon|string|null $date = null,
        bool $asJson = true
    ): array|string {
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

        return $asJson ? $response->body() : $response->json();
    }

    public function fetchLists(bool $asJson = true): Collection
    {
        $response = $this->fetchListsOverview();

        $lists = data_get($response, 'results.lists');

        return collect($lists)->map(
            function (array $list) use ($asJson) {
                $list = new BestSellersList(
                    $list['list_id'],
                    $list['list_name'],
                    $list['list_name_encoded']
                );

                return $asJson ? $list->toArray() : $list;
            }
        );
    }

    public function fetchBooksByListName(
        BookList|string $bookList,
        bool $asJson = true
    ): array|string {
        $listName = BookList::tryFromMixed($bookList);

        if (is_null($listName)) {
            throw new InvalidArgumentException('Improper book list name provided');
        }

        $request = new GetBooksByListName($listName);

        $response = $request->send();

        if ($response->failed()) {
            $this->handleResponseErrors($response);
        }

        return $asJson ? $response->body() : $response->json();
    }

    public function fetchBooksByListAndDate(
        BookList|string $bookList,
        Carbon|string $date,
        bool $asJson = true
    ): array|string {
        $listName = BookList::tryFromMixed($bookList);

        if (is_null($listName)) {
            throw new InvalidArgumentException('Improper book list name provided');
        }

        $publishedDate = Carbon::make($date);

        if (is_null($publishedDate)) {
            throw new InvalidArgumentException('Improper date provided');
        }

        $request = new GetBooksByListAndDate($listName, $date);

        $response = $request->send();

        if ($response->failed()) {
            $this->handleResponseErrors($response);
        }

        return $asJson ? $response->body() : $response->json();
    }

    private function handleResponseErrors($response)
    {
        $errors = data_get($response->json(), 'errors', []);

        $message = collect($errors)
            ->flatten()
            ->filter()
            ->implode(', ');

        return match ($response->status()) {
            Response::HTTP_UNAUTHORIZED => throw new UnauthorizedException($message),
            Response::HTTP_NOT_FOUND => throw new NotFoundHttpException($message),
            default => throw new Exception('An unexpected error has occurred')
        };
    }

    public static function externalServiceID(): int
    {
        return self::externalService()->id();
    }

    public static function externalService(): ExternalService
    {
        return ExternalService::NewYorkTimesBooks;
    }
}
