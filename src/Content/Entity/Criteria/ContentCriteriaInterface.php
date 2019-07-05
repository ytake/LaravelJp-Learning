<?php
declare(strict_types=1);

namespace LearningDomain\Content\Entity\Criteria;

use PHPMentors\DomainKata\Entity\CriteriaInterface;

/**
 * Class ContentCriteria
 */
interface ContentCriteriaInterface extends CriteriaInterface
{
    /**
     * @param string $content
     * @param string $pathname
     *
     * @return string
     */
    public function retrieve(
        string $content,
        string $pathname
    ): string;
}
