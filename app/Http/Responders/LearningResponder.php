<?php
declare(strict_types=1);

namespace Learning\Http\Responders;

use Illuminate\Contracts\View\View;
use PHPMentors\DomainKata\Entity\EntityInterface;

/**
 * Class LearningResponder
 */
class LearningResponder extends AbstractTemplateResponder
{
    /**
     * @param EntityInterface $content
     *
     * @return View
     */
    public function emit(EntityInterface $content): View
    {
        return $this->viewFactory->make('learning.level.index', ['content' => $content]);
    }
}
