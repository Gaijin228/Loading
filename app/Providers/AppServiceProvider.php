<?php

namespace App\Providers;

use App\Models\Produit;
use App\Models\Category;
use App\View\Composers\CategoryComposer;
use Illuminate\Support\Facades\View;
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

            // Filtrer les catégories
            $matches = [
                'is_online' => 1,
                'parent_id' => null,
            ];

            $view->with('categories', Category::where($matches)->get());
            // $view->with('categories', Category::where('is_online', 1)->get());
        });

    }
}
