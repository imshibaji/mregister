<?php

namespace Medust\Leads;

use Illuminate\Support\ServiceProvider;
use Auth;

class LeadsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'mleads');
        $this->loadMigrationsFrom(__DIR__.'/migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      include __DIR__.'/routes.php';
      $this->app->make('Medust\Leads\Controllers\LeadsController');
    }
}
