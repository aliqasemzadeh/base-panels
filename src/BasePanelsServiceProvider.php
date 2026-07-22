<?php

declare(strict_types=1);

namespace BasePanels\BasePanels;

use BasePanels\BasePanels\Console\Commands\BasePanelsCommand;
use Illuminate\Support\ServiceProvider;

class BasePanelsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/base-panels.php', 'base-panels');

        $this->app->singleton(BasePanels::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/base-panels.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'base-panels');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'base-panels');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/base-panels.php' => config_path('base-panels.php'),
        ], ['base-panels', 'base-panels-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/base-panels'),
        ], ['base-panels', 'base-panels-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/base-panels'),
        ], ['base-panels', 'base-panels-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/base-panels'),
        ], ['base-panels', 'base-panels-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['base-panels', 'base-panels-migrations']);

        $this->commands([
            BasePanelsCommand::class,
        ]);
    }
}
