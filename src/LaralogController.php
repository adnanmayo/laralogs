<?php

namespace Adnanmayo\Laralog;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


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
