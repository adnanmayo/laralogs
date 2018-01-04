<?php

namespace Adnanmayo\Laralog;

use Illuminate\Support\ServiceProvider;

class LaralogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //


        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->publishes([
            __DIR__.'/Config/laralogs.php' => config_path('laralogs.php'),
            __DIR__.'/assets/' => public_path('vendor/laralogs'),
        ]);

        $this->loadViewsFrom(__DIR__.'/views', 'laralogs');


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
