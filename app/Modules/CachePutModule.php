<?php

namespace Learning\Modules;

use Ytake\LaravelAspect\Modules\CachePutModule as PackageCachePutModule;

/**
 * Class CachePutModule
 */
class CachePutModule extends PackageCachePutModule
{
    /** @var array */
    protected $classes = [
        // example
        // \Learning\Services\AcmeService::class
    ];
}
