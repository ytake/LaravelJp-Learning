<?php
declare(strict_types=1);

namespace Learning\Http\Actions;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;
use Learning\Http\Responders\IndexResponder;

/**
 * Class IndexAction
 */
class IndexAction extends Controller
{
    /**
     * @param IndexResponder $responder
     *
     * @return View
     */
    public function __invoke(IndexResponder $responder): View
    {
        return $responder->emit();
    }
}
