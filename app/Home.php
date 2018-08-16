<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    function index()
    {
        $pirma_mini = DB::table('pirma_mini')->get();
        $pirma_maxi = DB::table('pirma_maxi')->get();

        return view('home', ['pirma_mini' => $pirma_mini, 'pirma_maxi' => $pirma_maxi]);
    }
}
