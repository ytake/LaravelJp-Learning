<?php
declare(strict_types=1);

namespace LearningDomain\Entity;

use PHPMentors\DomainKata\Entity\EntityInterface;

/**
 * Class Content
 */
class Content implements EntityInterface
{
    /** @var string */
    private $path;

    /** @var string  */
    private $content;

    /**
     * Content constructor.
     *
     * @param string $path
     * @param string $content
     */
    public function __construct(string $path, string $content)
    {
        $this->path = $path;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function path()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function content(): string
    {
        return $this->content;
    }
}
