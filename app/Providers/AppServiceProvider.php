<?php
declare(strict_types=1);

namespace Learning\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Learning\DataAccess\Content;
use LearningDomain\Specification\ActiveContentSpecification;

/**
 * Class AppServiceProvider
 */
final class AppServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        $this->app->resolving(ActiveContentSpecification::class,
            function (ActiveContentSpecification $specification, Application $application) {
                $contentConfigure = $application['config']->get('contents');
                $specification->criteria(new Content(new Filesystem, $contentConfigure));

                return $specification;
            });
    }
}
