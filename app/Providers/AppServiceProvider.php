<?php

namespace Learning\Providers;

use Learning\Modules\CacheableModule;
use ParsedownExtra;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        if ($this->app->routesAreCached()) {
            $this->loadCachedRoutes();
        }
        /** @var \Ytake\LaravelAspect\AspectManager $aspect */
        $aspect = $this->app['aspect.manager'];
        $aspect->register(CacheableModule::class);
        $aspect->dispatch();
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(ParsedownExtra::class, function () {
            return new ParsedownExtra;
        });
    }

    /**
     * Load the cached routes for the application.
     *
     * @return void
     */
    protected function loadCachedRoutes()
    {
        $this->app->booted(function () {
            require_once $this->app->getCachedRoutesPath();
        });
    }
}
