<?php

namespace App\Providers;

use App\Policies\BooksPolicy;
use App\Policies\ListsPolicy;
use App\Policies\UsersPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Define gates for policies not attached to a Model
        Gate::define('viewLists', [ListsPolicy::class, 'viewLists']);
        Gate::define('viewListNames', [ListsPolicy::class, 'viewListNames']);
        Gate::define('viewBooksByList', [BooksPolicy::class, 'viewBooksByList']);
        Gate::define('viewBooksByDate', [BooksPolicy::class, 'viewBooksByDate']);
        Gate::define('viewBooksByListAndDate', [BooksPolicy::class, 'viewBooksByListAndDate']);
        Gate::define('viewBooks', [BooksPolicy::class, 'viewBooks']);
    }
}
