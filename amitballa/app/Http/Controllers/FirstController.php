<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    function firstpage()
    {
        return view('firstpage',['name'=>"amit"]);
    }
    function page()
    {
        return view('page','firstpage');
    }
    function secondpage()
    {
        $data=['amit','sonal','binal'];
        return view('secondpage',['name'=>$data]);
    }

    function page_include()
    {
        return view('page');
    }
}
