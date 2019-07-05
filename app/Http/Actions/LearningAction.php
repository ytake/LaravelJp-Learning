<?php
declare(strict_types=1);

namespace Learning\Http\Actions;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;
use Learning\Http\Responders\LearningResponder;
use LearningDomain\Content\Usecase\ReadLearningContentUsecase;
use LearningDomain\Content\Specification\ActiveContentSpecification;

/**
 * Class LearningAction
 */
final class LearningAction extends Controller
{
    /** @var LearningResponder */
    private $responder;

    /** @var ActiveContentSpecification */
    private $specification;

    /** @var ReadLearningContentUsecase */
    private $usecase;

    /**
     * @param LearningResponder          $responder
     * @param ActiveContentSpecification $specification
     * @param ReadLearningContentUsecase $usecase
     */
    public function __construct(
        LearningResponder $responder,
        ActiveContentSpecification $specification,
        ReadLearningContentUsecase $usecase
    ) {
        $this->responder = $responder;
        $this->specification = $specification;
        $this->usecase = $usecase;
    }

    /**
     * @param string            $target
     * @param string            $content
     *
     * @return View
     */
    public function __invoke(
        string $target,
        string $content = 'intro'
    ): View {
        return $this->responder->emit(
            $this->usecase->run(
                $this->specification
                    ->contentSpecification($target, $content)
            )
        );
    }
}
