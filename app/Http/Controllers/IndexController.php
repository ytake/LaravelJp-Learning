<?php


namespace Learning\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Class IndexController
 */
class IndexController extends Controller
{
    /**
     * @Get("/", as="index")
     */
    public function index() : View
    {
        return view('index');
    }
}
