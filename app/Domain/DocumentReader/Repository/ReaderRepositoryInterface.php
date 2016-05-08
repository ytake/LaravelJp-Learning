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

    /**
     * @param string $content
     * @param string $pathname
     *
     * @return string
     */
    public function findContent($content, $pathname);
}
