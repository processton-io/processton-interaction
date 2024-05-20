<?php

namespace Processton\ProcesstonInteraction;

use Illuminate\Support\ServiceProvider;

class ProcesstonInteractionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('processton-interaction', function () {
            return new ProcesstonInteraction;
        });
    }
}
