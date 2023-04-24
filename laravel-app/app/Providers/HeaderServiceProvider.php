<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('front.layouts.header', function ($view) {
                $categories_left = \App\Models\Category::take(5)->get();
                $categories_right = \App\Models\Category::skip(5)->limit(5)->get();
                $view->with(['categories_left' =>$categories_left , 'categories_right'=>$categories_right ]);
        });
    }
}
