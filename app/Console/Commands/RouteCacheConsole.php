<?php

namespace Learning\Console\Commands;

use Collective\Annotations\AnnotationFinder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\RouteCacheCommand;

/**
 * Class RouteCacheConsole
 */
class RouteCacheConsole extends RouteCacheCommand
{
    /** @var string */
    protected $name = 'route:annotated:cache';

    /** @var string */
    protected $description = 'Create a route cache file for faster route registration(for annotations)';

    /** @var AnnotationFinder */
    protected $finder;

    /**
     * RouteCacheConsole constructor.
     *
     * @param AnnotationFinder $finder
     * @param Filesystem       $filesystem
     */
    public function __construct(AnnotationFinder $finder, Filesystem $filesystem)
    {
        $this->finder = $finder;
        parent::__construct($filesystem);
    }

    /**
     * {@inheritdoc}
     */
    protected function getFreshApplicationRoutes() : \Illuminate\Routing\RouteCollection
    {
        if ($this->finder->routesAreScanned()) {
            /** @var \Illuminate\Contracts\Routing\Registrar $router */
            $router = $this->laravel['Illuminate\Contracts\Routing\Registrar'];
            require_once $this->finder->getScannedRoutesPath();
        }

        return $this->laravel['router']->getRoutes();
    }
}
