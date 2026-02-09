<?php

use App\Http\Controllers\BestSellersBookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('ny-times-best-sellers')->group(function () {
        Route::get('overview', [BestSellersBookController::class, 'listsOverview'])->name('v1.lists_overview');
        Route::get('lists', [BestSellersBookController::class, 'lists'])->name('v1.lists');
        Route::get('books', [BestSellersBookController::class, 'books'])->name('v1.books');
        Route::get('books/list/{list}', [BestSellersBookController::class, 'booksByListName'])->name('v1.books_by_list');
        Route::get(
            'books/list/{list}/published-date/{date}',
            [BestSellersBookController::class, 'booksByListNameAndDate']
        )->name('v1.books_by_list_and_date');
    });
});
