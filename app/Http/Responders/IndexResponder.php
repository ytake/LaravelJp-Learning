<?php
declare(strict_types=1);

namespace Learning\Http\Responders;

use Illuminate\Contracts\View\View;

/**
 * Class IndexResponder
 */
class IndexResponder extends AbstractTemplateResponder
{
    /**
     * @return View
     */
    public function emit(): View
    {
        return $this->viewFactory->make('index');
    }
}
