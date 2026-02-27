<?php

namespace App\Http\Controllers\BestSellers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BestSellers\BooksByListNameAndDateRequest;
use App\Http\Requests\BestSellers\BooksByListNameRequest;
use App\Http\Requests\BestSellers\ListNamesRequest;
use App\Http\Requests\BestSellers\ListsOverviewRequest;
use App\Http\Resources\BestSellers\ListResource;
use App\Http\Resources\BestSellers\BookResource;
use App\Services\BestSellersBooks\BestSellersBookService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookController extends Controller
{
    public function __construct(protected BestSellersBookService $service)
    {
        //
    }

    public function lists(ListNamesRequest $request): JsonResource
    {
        $lists = $this->service->getLists();

        return ListResource::collection($lists);
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
