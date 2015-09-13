<?php

namespace Codenexus\Classifieds;

use Illuminate\Support\ServiceProvider;

class ClassifiedsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__ . '/../routes.php';
        }
        // $this->publishes([
        //     __DIR__ . '/../config/classifieds.php' => config_path('classifieds.php'),
        // ]);

        // $this->mergeConfigFrom(
        //     __DIR__ . '/../config/classifieds.php', 'classifieds'
        // );
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
