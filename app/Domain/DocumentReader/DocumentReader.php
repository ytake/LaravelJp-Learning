<?php

namespace Learning\Domain\DocumentReader;

use Learning\Domain\DocumentReader\Repository\ReaderRepositoryInterface;

/**
 * Class DocumentReader
 */
class DocumentReader
{
    /** @var ReaderRepositoryInterface  */
    protected $readerRepositoryInterface;

    /**
     * DocumentReader constructor.
     *
     * @param ReaderRepositoryInterface $readerRepositoryInterface
     */
    public function __construct(ReaderRepositoryInterface $readerRepositoryInterface)
    {
        $this->readerRepositoryInterface = $readerRepositoryInterface;
    }

    /**
     * @return \string[]
     */
    public function scan() : array
    {
        return $this->readerRepositoryInterface->scanDirectories();
    }

    /**
     * @param string $target  for content target
     *
     * @return \Symfony\Component\Finder\SplFileInfo[]
     */
    public function findDocuments($target)
    {
        return $this->readerRepositoryInterface->findDirectory($target);
    }

    /**
     * @param string $target
     * @param string $pathname
     *
     * @return mixed
     */
    public function content($target, $pathname)
    {
        return $this->readerRepositoryInterface->findContent($target, $pathname);
    }
}
