<?php

namespace Applicazza\Subscribership;

use Illuminate\Support\ServiceProvider;

class SubscribershipServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfiguration();

        if (Subscribership::loadsMigrations()) {
            $this->loadMigrations();
        } else {
            $this->publishMigrations();
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfiguration();
    }

    protected function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    protected function publishConfiguration()
    {
        $this->publishes([
            __DIR__ . '/../config/subscriptions.php' => config_path('subscriptions.php')
        ], 'config');
    }

    protected function publishMigrations()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    protected function mergeConfiguration()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/subscriptions.php', 'subscriptions');
    }
}
