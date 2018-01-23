<?php

namespace Adnanmayo\Laralogs;

use \App\Http\Controllers\Controller;

/**
 * Class LaralogController
 * @package Adnanmayo\Laralog
 *
 */
class LaralogsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('laralogs::index');
    }
}
