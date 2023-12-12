<?php

namespace Lrdemo\Lrmodulebuilder\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LRbuilderController
{
    public function __invoke()
    {

        $quote = "Hello";
        return view('lrmodulebuilder::index', compact('quote'));
    }
}