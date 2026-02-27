<?php

use App\Http\Controllers\BestSellersBooksController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')
    ->middleware('auth:sanctum')
    ->name('v1.')
    ->group(function () {
        Route::prefix('ny-times-best-sellers')->group(function () {
            Route::get('overview', [BestSellersBooksController::class, 'listsOverview'])->name('lists_overview');
            Route::get('lists', [BestSellersBooksController::class, 'lists'])->name('lists');
            Route::get('books', [BestSellersBooksController::class, 'books'])->name('books');
            Route::get('books/list/{list}', [BestSellersBooksController::class, 'booksByListName'])->name('books_by_list');
            Route::get(
                'books/list/{list}/published-date/{date}',
                [BestSellersBooksController::class, 'booksByListNameAndDate']
            )->name('books_by_list_and_date');
        });

        Route::apiResource('users', UsersController::class);
    });
