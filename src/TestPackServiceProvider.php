<?php

namespace Raynstudios\Testpack;

use Illuminate\Support\ServiceProvider;

class TestPackServiceProvider extends ServiceProvider
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
        include __DIR__.'/routes.php';

        // callback as argument to bind
        $callback = function() {
            $implementation = new \Raynstudios\Testpack\HelloWorldService;
            $implementation->message = 'Hello HelloWorldService, %d times <br>';
            return $implementation;
        };

        // this will bind as normal service
        $this->app->bind('hello', $callback);
        // this will bind as singleton so the 'times' field's value will increment
        $this->app->singleton('helloSingleton', $callback);
    }
}
