<?php
declare(strict_types=1);

namespace Learning\Http\Actions;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;
use Learning\Http\Responders\IndexResponder;

/**
 * Class IndexAction
 */
final class IndexAction extends Controller
{
    /** @var IndexResponder */
    private $responder;

    /**
     * @param IndexResponder $responder
     */
    public function __construct(
        IndexResponder $responder
    ) {
        $this->responder = $responder;
    }

    /**
     * @return View
     */
    public function __invoke(): View
    {
        return $this->responder->emit();
    }
}
