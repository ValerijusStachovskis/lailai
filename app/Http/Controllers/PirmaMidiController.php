<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PirmaMidiController extends Controller
{
    function pirmaMidi()
    {
        $obj = new \App\PirmaMd;
        $obj->index();

        return redirect('pirma_midi');
    }
}
