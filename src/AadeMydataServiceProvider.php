<?php

namespace Gkalmoukis\AadeMydata;

use Illuminate\Support\ServiceProvider;

class AadeMydataServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/mydata.php' => config_path('mydata.php'),
        ], 'mydata');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/mydata.php',
            'mydata'
        );
    }
}
