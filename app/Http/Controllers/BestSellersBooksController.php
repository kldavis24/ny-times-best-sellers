<?php

namespace App\Http\Controllers;

use App\Http\Requests\BooksByListNameAndDateRequest;
use App\Http\Requests\BooksByListNameRequest;
use App\Http\Requests\ListNamesRequest;
use App\Http\Requests\ListsOverviewRequest;
use App\Http\Resources\BestSellersListResource;
use App\Http\Resources\BookResource;
use App\Services\BestSellersBooks\BestSellersBookService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BestSellersBooksController extends Controller
{
    public function __construct(protected BestSellersBookService $service)
    {
        //
    }

    public function lists(ListNamesRequest $request): JsonResource
    {
        $lists = $this->service->getLists();

        return BestSellersListResource::collection($lists);
    }

    public function books(Request $request): JsonResource
    {
        $books = $this->service->getBooks();

        return BookResource::collection($books);
    }

    public function listsOverview(ListsOverviewRequest $request)
    {
        $response = $this->service->getListsOverview();

        return $response;
    }

    public function booksByListName(
        BooksByListNameRequest $request
    ): JsonResource {
        $books = $this->service->getBooksByListName($request->list());

        return BookResource::collection($books);
    }

    public function booksByListNameAndDate(
        BooksByListNameAndDateRequest $request
    ): JsonResource {
        $response = $this->service->getBooksByListAndDate(
            $request->list(),
            $request->publishedDate()
        );

        return BookResource::collection($response);
    }
}
