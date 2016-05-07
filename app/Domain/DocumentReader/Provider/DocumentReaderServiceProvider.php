<?php

namespace Learning\Domain\DocumentReader\Provider;

use Learning\Domain\DocumentReader\Repository\ReaderRepository;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Learning\Domain\DocumentReader\Repository\ReaderRepositoryInterface;

/**
 * Class DocumentReaderServiceProvider
 */
class DocumentReaderServiceProvider extends ServiceProvider
{
    /** @var bool  */
    protected $defer = true;

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->bind(ReaderRepositoryInterface::class, function (Application $app) {
            return $app->make(ReaderRepository::class, [
                $app['files'],
                $app['config']->get('contents')
            ]);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function provides()
    {
        return [
            ReaderRepositoryInterface::class,
        ];
    }
}
