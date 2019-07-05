<?php
declare(strict_types=1);

namespace Learning\FileAccess;

use Illuminate\Filesystem\Filesystem;
use LearningDomain\Content\Entity\Criteria\ContentCriteriaInterface;

/**
 * Class Content
 */
class Content implements ContentCriteriaInterface
{
    /** @var string  */
    protected $extension = '.md';

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
     * @param string $content
     * @param string $pathname
     *
     * @return string
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function retrieve(string $content, string $pathname): string
    {
        $directory = implode(DIRECTORY_SEPARATOR, [
                $this->config['directory'],
                $this->config['level'][$content],
                $pathname . $this->extension,
            ]
        );

        return $this->filesystem->get($directory);
    }
}
