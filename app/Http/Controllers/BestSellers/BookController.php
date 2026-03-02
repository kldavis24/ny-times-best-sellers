<?php

namespace App\Http\Controllers\BestSellers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BestSellers\BooksByListNameAndDateRequest;
use App\Http\Requests\BestSellers\BooksByListNameRequest;
use App\Http\Requests\BestSellers\BooksRequest;
use App\Http\Requests\BestSellers\ListNamesRequest;
use App\Http\Requests\BestSellers\ListsOverviewRequest;
use App\Http\Resources\BestSellers\ListResource;
use App\Http\Resources\BestSellers\BookResource;
use App\Services\BestSellersBooks\BestSellersBookService;
use Illuminate\Http\Resources\Json\JsonResource;

class BookController extends Controller
{
    public function __construct(protected BestSellersBookService $service)
    {
        //
    }

    public function lists(ListNamesRequest $request): JsonResource
    {
        $date = $request->publishedDate();

        $lists = $this->service->getLists($date);

        return ListResource::collection($lists);
    }

    public function books(BooksRequest $request): JsonResource
    {
        $date = $request->publishedDate();

        $books = $this->service->getBooks($date);

        return BookResource::collection($books);
    }

    public function listsOverview(ListsOverviewRequest $request)
    {
        $date = $request->publishedDate();

        $response = $this->service->getListsOverview($date);

        return $response;
    }

    public function booksByListName(BooksByListNameRequest $request): JsonResource
    {
        $books = $this->service->getBooksByListName($request->listName());

        return BookResource::collection($books);
    }

    public function booksByListNameAndDate(BooksByListNameAndDateRequest $request): JsonResource
    {
        $response = $this->service->getBooksByListNameAndDate(
            $request->listName(),
            $request->publishedDate()
        );

        return BookResource::collection($response);
    }
}
