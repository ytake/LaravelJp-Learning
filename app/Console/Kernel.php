<?php

namespace Learning\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * Class Kernel
 */
class Kernel extends ConsoleKernel
{
    /** @var string[]  */
    protected $bootstrappers = [
        'Illuminate\Foundation\Bootstrap\DetectEnvironment',
        'Illuminate\Foundation\Bootstrap\LoadConfiguration',
        'Ytake\LaravelFluent\ConfigureLogging',
        'Illuminate\Foundation\Bootstrap\HandleExceptions',
        'Illuminate\Foundation\Bootstrap\SetRequestForConsole',
        'Illuminate\Foundation\Bootstrap\RegisterProviders',
        'Illuminate\Foundation\Bootstrap\BootProviders',
    ];
}
