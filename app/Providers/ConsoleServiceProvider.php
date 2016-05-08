<?php

namespace Learning\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Collective\Annotations\AnnotationFinder;
use Learning\Console\Commands\RouteCacheConsole;

/**
 * Class ConsoleServiceProvider
 */
class ConsoleServiceProvider extends ServiceProvider
{
    /** @var bool */
    protected $defer = true;

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->singleton('app.command.route.annotation.cache', function (Application $app) {
            return new RouteCacheConsole(new AnnotationFinder($app), $app['files']);
        });
        $this->commands([
            'app.command.route.annotation.cache',
        ]);
    }

    /**
     * @return string[]
     */
    public function provides() : array
    {
        return [
            'app.command.route.annotation.cache',
        ];
    }
}
