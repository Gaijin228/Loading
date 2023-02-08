<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Pour faire appel aux categories de header sur toute les pages

        view()->composer(['home', 'shop'], function ($view) {

            $view->with('categories', Category::where('is_online', 1)->get());

        });
        
    }
}
