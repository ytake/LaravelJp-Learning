<?php

namespace Learning\Http\Controllers;

use Illuminate\Contracts\View\View;
use Learning\Services\ContentCreateService;

/**
 * Class DocumentController
 * @Controller(prefix="learning")
 */
class LearningController extends Controller
{
    /** @var ContentCreateService */
    protected $service;

    /**
     * LearningController constructor.
     *
     * @param ContentCreateService $service
     */
    public function __construct(ContentCreateService $service)
    {
        $this->service = $service;
    }

    /**
     * @Get("/{level}/{content?}", as="learning.level.index")
     * @param string $target
     * @param string $content
     *
     * @return View
     */
    public function index($target, $content = 'intro') : View
    {
        return view('learning.level.index', [
            'content' => $this->service->content($target, "{$content}.md"),
        ]);
    }
}
