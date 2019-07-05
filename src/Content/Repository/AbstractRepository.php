<?php
declare(strict_types=1);

namespace LearningDomain\Content\Repository;

use PHPMentors\DomainKata\Repository\Operation\CriteriaBuilderInterface;

/**
 * Class AbstractRepository
 */
abstract class AbstractRepository
{
    /** @var CriteriaBuilderInterface */
    protected $criteria;

    /**
     * @param CriteriaBuilderInterface $criteriaBuilder
     */
    final public function criteria(CriteriaBuilderInterface $criteriaBuilder)
    {
        $this->criteria = $criteriaBuilder->build();
    }
}
