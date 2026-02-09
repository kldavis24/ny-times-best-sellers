<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetBooksByListNameAndDateRequest;
use App\Http\Requests\GetBooksByListNameRequest;
use App\Http\Resources\BestSellersListResource;
use App\Http\Resources\BookResource;
use App\Services\BestSellersBooks\BestSellersBookService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BestSellersBookController extends Controller
{
    public function __construct(protected BestSellersBookService $service)
    {
        //
    }

    public function lists(Request $request): JsonResource
    {
        $lists = $this->service->getLists();

        return BestSellersListResource::collection($lists);
    }

    public function books(Request $request): JsonResource
    {
        $books = $this->service->getBooks();

        return BookResource::collection($books);
    }

    public function listsOverview(Request $request)
    {
        $response = $this->service->getListsOverview();

        return $response;
    }

    public function booksByListName(
        GetBooksByListNameRequest $request
    ): JsonResource {
        $books = $this->service->getBooksByListName($request->list());

        return BookResource::collection($books);
    }

    public function booksByListNameAndDate(
        GetBooksByListNameAndDateRequest $request
    ): JsonResource {
        $response = $this->service->getBooksByListAndDate(
            $request->list(),
            $request->publishedDate()
        );

        return BookResource::collection($response);
    }
}
