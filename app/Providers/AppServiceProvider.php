<?php

namespace App\Providers;

use App\Policies\BookPolicy;
use App\Policies\ListPolicy;
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
        Gate::define('viewLists', [ListPolicy::class, 'viewLists']);
        Gate::define('viewListNames', [ListPolicy::class, 'viewListNames']);
        Gate::define('viewBooksByList', [BookPolicy::class, 'viewBooksByList']);
        Gate::define('viewBooksByDate', [BookPolicy::class, 'viewBooksByDate']);
        Gate::define('viewBooksByListAndDate', [BookPolicy::class, 'viewBooksByListAndDate']);
        Gate::define('viewBooks', [BookPolicy::class, 'viewBooks']);
    }
}
