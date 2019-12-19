<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\View;
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
         View::composer(
            'layouts.aside', 'App\Http\ViewComposers\NavComposer'
        );

        // You can use Closure based composers
        // which will be used to resolve any data
        // in this case we will pass menu items from database
        View::composer('layouts.aside', function ($view) {
            $view->with('menu', User::all());
        });
    }
}
