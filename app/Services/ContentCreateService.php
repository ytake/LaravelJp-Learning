<?php

namespace Learning\Services;

use Learning\Domain\DocumentReader\DocumentReader;
use Ytake\LaravelAspect\Annotation\Cacheable;

/**
 * Class ContentCreateService
 */
class ContentCreateService
{
    /** @var DocumentReader */
    protected $reader;

    /** @var \ParsedownExtra */
    protected $parse;

    /**
     * ContentCreateService constructor.
     *
     * @param DocumentReader $reader
     * @param \ParsedownExtra $parse
     */
    public function __construct(DocumentReader $reader, \ParsedownExtra $parse)
    {
        $this->reader = $reader;
        $this->parse = $parse;
    }

    /**
     * @Cacheable(
     *     cacheName=\Learning\Foundation\Constants::CONTENT_SERVICE_CACHE_KEY,
     *     key={"#target","#markdown"},
     *     lifetime=600
     * )
     * @param string $target
     * @param string $markdown
     *
     * @return string
     * @throws \LogicException
     */
    public function content($target, $markdown)
    {
        $content = $this->reader->content($target, $markdown);
        if ($content === '') {
            throw new \LogicException;
        }

        return $this->parse->parse($content);
    }
}
