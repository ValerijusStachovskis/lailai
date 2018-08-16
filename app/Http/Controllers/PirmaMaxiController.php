<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PirmaMaxiController extends Controller
{
    function pirmaMaxi()
    {
        $obj = new \App\PirmaMx;
        $obj->index();

        return redirect('pirma_maxi');
    }
}
