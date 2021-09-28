<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class User extends Controller
{
    function index()
    {
        return DB::select("select * from register");
    }
}
