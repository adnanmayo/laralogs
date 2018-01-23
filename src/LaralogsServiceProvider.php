<?php

namespace Adnanmayo\Laralogs;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaralogsServiceProvider
 * @package Adnanmayo\Laralogs
 */
class LaralogsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->publishes([
            __DIR__.'/Config/laralogs.php' => config_path('laralogs.php'),
            __DIR__.'/assets/' => public_path('vendor/laralogs'),
        ]);

        $this->loadViewsFrom(__DIR__.'/views', 'laralogs');
    }

    /**
     * register function abstract
     *
     */
    public function register(){}
}
