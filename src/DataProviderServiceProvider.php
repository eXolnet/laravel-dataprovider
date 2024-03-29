<?php

namespace Exolnet\DataProvider;

use Illuminate\Support\ServiceProvider;

class DataProviderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/skeleton.php' => config_path('skeleton.php'),
            ], 'config');

            $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/skeleton'),
            ], 'views');
        }*/
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //$this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');

        $this->app->bind('DataProvider', function () {
            return new DataProviderClass();
        });
    }
}
