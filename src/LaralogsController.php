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
    public function index()
    {
        return view('laralogs::index');
    }
}
