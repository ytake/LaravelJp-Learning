<?php

namespace Learning\Modules;

use Ytake\LaravelAspect\Modules\CacheEvictModule as PackageCacheEvictModule;

/**
 * Class CacheEvictModule
 */
class CacheEvictModule extends PackageCacheEvictModule
{
    /** @var array */
    protected $classes = [
        // example
        // \Learning\Services\AcmeService::class
    ];
}
