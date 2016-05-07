<?php

namespace Learning\Domain\DocumentReader\Repository;

/**
 * Interface ReaderRepositoryInterface
 */
interface ReaderRepositoryInterface
{
    /**
     * @return string[]
     */
    public function scanDirectories();

    /**
     * @param string $content
     *
     * @return \Symfony\Component\Finder\SplFileInfo[]
     */
    public function findDirectory($content);
}
