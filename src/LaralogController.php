<?php

namespace Adnanmayo\Laralog;

use \App\Http\Controllers\Controller;


/**
 * Class LaralogController
 * @package Adnanmayo\Laralog
 *
 */
class LaralogController extends Controller
{
    public function index()
    {
        return view('laralogs::index');
    }

}
