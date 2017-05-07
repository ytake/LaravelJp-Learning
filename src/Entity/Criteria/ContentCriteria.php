<?php
declare(strict_types=1);

namespace LearningDomain\Entity\Criteria;

use PHPMentors\DomainKata\Entity\CriteriaInterface;

/**
 * Class ContentCriteria
 */
abstract class ContentCriteria implements CriteriaInterface
{
    /**
     * @param string $content
     * @param string $pathname
     *
     * @return string
     */
    abstract public function retrieve(string $content, string $pathname): string;
}
