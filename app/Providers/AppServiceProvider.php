<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        Blade::if('admin', function () {
            return auth()->user()->isAdmin();
        });

        Blade::if('manager', function () {
            return auth()->user()->isManager();
        });

        Blade::if('user', function ($role='user', $role1='manager', $role2='admin') {
            return auth()->user()->isUser($role,$role1,$role2);
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
