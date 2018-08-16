<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome1Controller extends Controller
{
    function index()
    {
        $obj = new \App\Welcome1;
        return $obj->index();
    }
}
