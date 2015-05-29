<?php

namespace Travis\Error404;

use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider {

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $dir = __DIR__.'/../../../';

        // publish
        $this->publishes([
            $dir.'config/error404.php' => config_path('error404.php'),
            $dir.'views/errors' => base_path('resources/views/errors'),
        ]);

        // load views
        $this->loadViewsFrom($dir.'views', 'error404');

        // load routes
        include $dir.'routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}