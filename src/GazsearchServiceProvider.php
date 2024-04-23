<?php

namespace Morrisrobinson\UkgazSearch;

use Illuminate\Support\ServiceProvider;

class GazsearchServiceProvider extends ServiceProvider
{

    // fires after all Third Party libs have initialised
    // bootstrap webservices
    // listen for events
    // publish config files
    // database migrations
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/gazsearch.php' => config_path('gazsearch.php')
        ]);
    }

    // fires before libs are ready
    // extend functionlaity from other classes
    // register service providers
    //
    public function register()
    {
        $this->app->singleton(Gazsearch::class, function() {
            return new Gazsearch();
        });
    }
}
