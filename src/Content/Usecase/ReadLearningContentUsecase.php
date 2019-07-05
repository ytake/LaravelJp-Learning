<?php
declare(strict_types=1);

namespace LearningDomain\Content\Usecase;

use LearningDomain\Repository\ContentRepository;
use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Usecase\UsecaseInterface;

/**
 * Class ReadLearningContentUsecase
 */
class ReadLearningContentUsecase implements UsecaseInterface
{
    /** @var ContentRepository */
    protected $contentRepository;

    /**
     * ReadLearningContentUsecase constructor.
     *
     * @param ContentRepository $contentRepository
     */
    public function __construct(ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }

    /**
     * @param EntityInterface $entity
     *
     * @return null|EntityInterface
     */
    public function run(EntityInterface $entity)
    {
        return $this->contentRepository->find($entity);
    }
}
