<?php

namespace Learning\Providers;

use Collective\Annotations\AnnotationsServiceProvider as ServiceProvider;

/**
 * Class AnnotationServiceProvider
 */
class AnnotationServiceProvider extends ServiceProvider
{
    /** @var string[] */
    protected $scanEvents = [];

    /** @var string[] */
    protected $scanRoutes = [
        'Learning\Http\Controllers\IndexController',
        'Learning\Http\Controllers\LearningController',
    ];
}
