<?php

namespace Learning\Modules;

use Ytake\LaravelAspect\Modules\TransactionalModule as PackageTransactionalModule;

/**
 * Class TransactionalModule
 */
class TransactionalModule extends PackageTransactionalModule
{
    /** @var array */
    protected $classes = [
        // example
        // \Learning\Services\AcmeService::class
    ];
}
