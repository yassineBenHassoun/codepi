<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * @return Factory|View
     */
    public function getIndex()
    {
        return view('index');
    }
}
