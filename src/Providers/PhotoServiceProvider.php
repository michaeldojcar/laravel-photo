<?php

namespace MichaelDojcar\LaravelPhoto\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class PhotoServiceProvider
 *
 * @package MichaelDojcar\LaravelPhoto\Providers
 */
class PhotoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/photo.php', 'photo');
    }

    public function boot()
    {
        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Publish config
        $this->publishConfig();
    }

    private function publishConfig()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/../../config/photo.php' => config_path('photo.php'),
                __DIR__ . '/../../config/croppa.php' => config_path('croppa.php'),
            ], 'config');

        }
    }
}