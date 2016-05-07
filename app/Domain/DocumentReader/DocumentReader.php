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
    public function scan()
    {
        return $this->readerRepositoryInterface->scanDirectories();
    }
}
