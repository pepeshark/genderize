<?php

namespace Evilcorp\Genderize;

use Illuminate\Support\ServiceProvider;

class GenderizeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['genderize'] = $this->app->share(function($app) {
            return new Genderize;
        });
    }
}
