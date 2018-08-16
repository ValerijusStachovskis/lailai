<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Welcome1 extends Model
{
    function index()
    {
        $pirma_mini = DB::table('pirma_mini')->get();
        $pirma_maxi = DB::table('pirma_maxi')->get();

        return view('welcome1', ['pirma_mini' => $pirma_mini, 'pirma_maxi' => $pirma_maxi]);
    }
}
