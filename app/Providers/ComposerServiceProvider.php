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
            $view->with('authorsName', Author::limit(4)->latest()->get());
        });

        view()->composer('layouts.nav', function ($view) {
            $view->with('publishersName', Publisher::limit(4)->latest()->get());
        });
    }
}
