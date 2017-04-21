<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }

    public function test()
    {
        return view('frontend.test');
    }

    public function sendform(Request $request)
    {
        $input = $request->all();
//        $input =  $_FILES;
        var_dump($input);
        return "ssss";
    }

}
