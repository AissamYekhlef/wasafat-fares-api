<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components/*', function($view){
            $view->with( 
                [
                    'categories' => Category::latest()->get(),
                    'dishes' => Dish::latest()->get(),
                ]);
        });
    }
}
