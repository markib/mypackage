<?php

namespace bikram\mynewpack;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/mynewpack.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('mynewpack.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'mynewpack'
        );

        $this->app->bind('mynewpack', function () {
            return new mynewpack();
        });
    }
}
