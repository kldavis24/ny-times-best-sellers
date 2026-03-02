<?php

use App\Http\Controllers\BestSellers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')
    ->middleware('auth:sanctum')
    ->name('v1.')
    ->group(function () {
        Route::prefix('ny-times-best-sellers')->group(function () {
            Route::get('lists', [BookController::class, 'lists'])->name('lists');
            Route::get('lists/overview', [BookController::class, 'listsOverview'])->name('lists_overview');
            Route::get('books', [BookController::class, 'books'])->name('books');
            Route::get('books/list/{list_name}', [BookController::class, 'booksByListName'])->name('books_by_list_name');
            Route::get(
                'books/list/{list_name}/published-date/{published_date}',
                [BookController::class, 'booksByListNameAndDate']
            )->name('books_by_list_name_and_date');
        });

        Route::apiResource('users', UserController::class);
    });
