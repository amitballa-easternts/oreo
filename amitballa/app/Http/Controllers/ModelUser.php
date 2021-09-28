<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reg;

class ModelUser extends Controller
{
    function index()
    {
        return User::all();
    }
}
