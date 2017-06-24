<?php

namespace jafar690\SweetalertFlashMessaging;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'jafar690\SweetalertFlashMessaging\SessionStore',
            'jafar690\SweetalertFlashMessaging\LaravelSessionStore'
        );

        $this->app->singleton('flash', function () {
            return $this->app->make('jafar690\SweetalertFlashMessaging\FlashNotifier');
        });
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
