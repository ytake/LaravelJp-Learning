<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Contracts\Routing\Registrar as RouterInterface;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

/**
 * Class RouteServiceProvider
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function (RouterInterface $router) {
            $router->get('/', function () {
                return view('welcome');
            });
        });
    }
}
