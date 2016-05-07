<?php

namespace Learning\Domain\DocumentReader\Repository;

use Illuminate\Filesystem\Filesystem;
use Ytake\LaravelAspect\Annotation\Cacheable;

/**
 * Class ReaderRepository
 */
class ReaderRepository implements ReaderRepositoryInterface
{
    /** @var Filesystem */
    protected $filesystem;

    /** @var array */
    protected $config;

    /**
     * ReaderRepository constructor.
     *
     * @param Filesystem $filesystem
     * @param array      $config
     */
    public function __construct(Filesystem $filesystem, array $config)
    {
        $this->filesystem = $filesystem;
        $this->config = $config;
    }

    /**
     * @return string[]
     */
    public function scanDirectories()
    {
        return $this->filesystem->directories($this->config['directory']);
    }

    /**
     * @Cacheable(
     *     cacheName="learning.content",
     *     key="#content",
     *     lifetime=600
     * )
     * @param string $content
     *
     * @return \Symfony\Component\Finder\SplFileInfo[]
     */
    public function findDirectory($content)
    {
        return $this->filesystem->allFiles($this->config['directory'] . '/' . $this->config['level'][$content]);
    }
}
