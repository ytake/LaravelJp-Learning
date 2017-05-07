<?php
declare(strict_types=1);

namespace Learning\Http\Responders;

use Illuminate\Contracts\View\Factory;

/**
 * Class AbstractTemplateResponder
 */
abstract class AbstractTemplateResponder
{
    /** @var Factory  */
    protected $viewFactory;

    /**
     * AbstractTemplateResponder constructor.
     *
     * @param Factory $viewFactory
     */
    public function __construct(Factory $viewFactory)
    {
        $this->viewFactory = $viewFactory;
    }
}
