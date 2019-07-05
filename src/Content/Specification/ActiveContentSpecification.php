<?php
declare(strict_types=1);

namespace LearningDomain\Content\Specification;

use LearningDomain\Content\Entity\Content;
use LearningDomain\Content\Entity\Criteria\ContentCriteriaInterface;
use LearningDomain\Content\Repository\ContentRepository;
use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Entity\CriteriaInterface;
use PHPMentors\DomainKata\Specification\SpecificationInterface;
use PHPMentors\DomainKata\Repository\Operation\CriteriaBuilderInterface;

/**
 * Class ActiveContentSpecification
 */
class ActiveContentSpecification implements SpecificationInterface, CriteriaBuilderInterface
{
    /** @var  CriteriaInterface */
    protected $criteria;

    /** @var string */
    protected $content;

    /** @var string */
    protected $pathname;

    /**
     * @param string $content
     * @param string $pathname
     *
     * @return $this
     */
    public function contentSpecification(
        string $content,
        string $pathname
    ): self {
        $this->content = $content;
        $this->pathname = $pathname;
        return $this;
    }

    /**
     * @return CriteriaInterface
     */
    public function build(): CriteriaInterface
    {
        return $this->criteria;
    }

    /**
     * @param EntityInterface $entity
     *
     * @return bool
     */
    public function isSatisfiedBy(EntityInterface $entity): bool
    {
        if ($entity instanceof Content) {
            return true;
        }

        return false;
    }

    /**
     * @param ContentCriteriaInterface $criteria
     */
    public function setCriteria(ContentCriteriaInterface $criteria)
    {
        $this->criteria = $criteria;
    }

    /**
     * @param ContentRepository $repository
     *
     * @return null|Content
     */
    public function satisfyingSpecification(ContentRepository $repository)
    {
        $repository->criteria($this);
        $result = $repository->queryBy($this->content, $this->pathname);
        if (count($result)) {
            if ($this->isSatisfiedBy($result[0])) {
                return $result[0];
            }
        }

        return null;
    }
}
