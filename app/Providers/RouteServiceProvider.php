<?php
declare(strict_types=1);

namespace Learning\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\Registrar as RoutingContract;
use Learning\Foundation\ApplicationRoute;

/**
 * Class RouteServiceProvider
 */
final class RouteServiceProvider extends ServiceProvider
{
    /**
     * @param RoutingContract|\Illuminate\Routing\Router $router
     * @param ApplicationRoute                           $applicationRoute
     */
    public function boot(RoutingContract $router, ApplicationRoute $applicationRoute)
    {
        $applicationRoute->register($router);
        $this->app->booted(function (Application $application) {
            $application['router']->getRoutes()->refreshNameLookups();
            $application['router']->getRoutes()->refreshActionLookups();
        });
    }
}
