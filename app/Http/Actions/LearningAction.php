<?php
declare(strict_types=1);

namespace Learning\Http\Actions;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;
use Learning\Http\Responders\LearningResponder;
use LearningDomain\Usecase\ReadLearningContentUsecase;
use LearningDomain\Specification\ActiveContentSpecification;

/**
 * Class LearningAction
 */
class LearningAction extends Controller
{
    /** @var ActiveContentSpecification */
    protected $specification;

    /** @var ReadLearningContentUsecase */
    protected $usecase;

    /**
     * LearningAction constructor.
     *
     * @param ActiveContentSpecification $specification
     * @param ReadLearningContentUsecase $usecase
     */
    public function __construct(
        ActiveContentSpecification $specification,
        ReadLearningContentUsecase $usecase
    ) {
        $this->specification = $specification;
        $this->usecase = $usecase;
    }

    /**
     * @param string            $target
     * @param string            $content
     * @param LearningResponder $responder
     *
     * @return View
     */
    public function __invoke(string $target, string $content = 'intro', LearningResponder $responder): View
    {
        $this->specification->contentSpecification($target, $content);

        return $responder->emit($this->usecase->run($this->specification));
    }
}
