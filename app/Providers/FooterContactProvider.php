<?php

namespace App\Providers;

use App\Contact;
use Illuminate\Support\ServiceProvider;
use View;

class FooterContactProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('layouts.partials.footer', function($view) {
            $view->with(['contact' => Contact::all()]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
