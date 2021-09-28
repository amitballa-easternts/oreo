<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    function register_form()
    {
        return view('register_form');
    }

    function send_data(Request $reqq)
    {

        return $reqq;
    }
}
