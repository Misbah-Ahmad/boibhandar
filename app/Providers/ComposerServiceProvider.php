<?php

namespace App\Providers;

use App\Author;
use App\Publisher;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\ServiceProvider;

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
        

        view()->composer('layouts.nav', function ($view){

            $cookie_name = (auth()->check() ? env('AUTH_CART_COOKIE') : env('GUEST_CART_COOKIE'));

            Cookie::queue(Cookie::make(env('CART_COOKIE_NAME'), $cookie_name, intval(env('CART_COOKIE_AGE')), '/'));

            $cookie = json_decode(Cookie::get($cookie_name));

            $cookie_count = 0;

            if ($cookie != null && is_array($cookie)) {
                $cookie_count = count($cookie);
            }



            $view->with(compact(['cookie_name', 'cookie_count']));

        });

    }
}
