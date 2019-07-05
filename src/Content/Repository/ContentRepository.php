<?php
declare(strict_types=1);

namespace LearningDomain\Content\Repository;

use LearningDomain\Content\Entity\ContentCollection;
use LearningDomain\Content\Entity\Criteria\ContentCriteriaInterface;
use LearningDomain\Content\Specification\ActiveContentSpecification;

/**
 * Class ContentRepository
 */
class ContentRepository extends AbstractRepository
{
    /** @var ContentCriteriaInterface */
    protected $criteria;

    /**
     * @param ActiveContentSpecification $specification
     *
     * @return null
     */
    public function find(ActiveContentSpecification $specification)
    {
        return $specification->satisfyingSpecification($this);
    }

    /**
     * @param string $content
     * @param string $pathname
     *
     * @return array
     */
    public function queryBy(string $content, string $pathname): array
    {
        $collection = new ContentCollection([
            [
                'content' => $this->criteria->retrieve($content, $pathname),
                'path'    => $pathname,
            ],
        ]);

        return $collection->toArray();
    }
}
