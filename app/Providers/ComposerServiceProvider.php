<?php

namespace App\Providers;

use App\Author;
use Illuminate\Support\ServiceProvider;
use App\Publisher;

class ComposerServiceProvider extends ServiceProvider
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


        view()->composer('layouts.nav', function ($view) {
            
            $publishersName = Publisher::limit(4)->latest()->get();           
            $authorsName = Author::limit(4)->latest()->get();
            $cart_books = [];

            if(auth()->check())
            {
                $cart_books = json_decode(auth()->user()->cart->books()->pluck('book_id'));                
            }

            $view->with(compact(['publishersName', 'authorsName', 'cart_books']));

        });

    }
}
