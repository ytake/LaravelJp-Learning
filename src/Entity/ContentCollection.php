<?php
declare(strict_types=1);

namespace LearningDomain\Entity;

/**
 * Class ContentCollection
 */
class ContentCollection
{
    /** @var array */
    protected $content;

    /**
     * ContentCollection constructor.
     *
     * @param array $content
     */
    public function __construct(array $content = [])
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->content);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $entities = [];
        if ($this->content) {
            foreach ($this->content as $content) {
                $entities[] = new Content($content['path'], $content['content']);
            }
        }

        return $entities;
    }
}
