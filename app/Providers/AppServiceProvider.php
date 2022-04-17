<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;
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
        Blade::aliasComponent('components.btn', 'btn');
        Blade::aliasComponent('components.badge', 'badge');
        Blade::aliasComponent('components.img', 'img');

        Validator::extend('alpha_spaces', function ($attribute, $value) {
            return preg_match('/^[\pL\s]+$/u', $value);
        });
    }
}
