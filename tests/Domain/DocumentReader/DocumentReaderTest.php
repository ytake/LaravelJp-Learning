<?php

use Learning\Domain\DocumentReader\DocumentReader;

/**
 * Class DocumentReaderTest
 * @see Learning\Domain\DocumentReader\DocumentReader
 */
class DocumentReaderTest extends \TestCase
{
    /** @var  DocumentReader */
    private $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new DocumentReader(
            $this->app->make(Learning\Domain\DocumentReader\Repository\ReaderRepositoryInterface::class)
        );
    }

    public function testShouldReturnServiceInstance()
    {
        $this->assertInstanceOf('Learning\Domain\DocumentReader\DocumentReader', $this->service);
    }

    public function testShouldReturnArrayScanDirectories()
    {
        $this->assertInternalType('array', $this->service->scan());
    }
}
