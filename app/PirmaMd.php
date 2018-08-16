<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PirmaMd extends Model
{
    function index()
    {
        $campino = $_POST['campino'];
        $suris = $_POST['suris'];
        $kumpis = $_POST['kumpis'];
        $jelopenas = $_POST['jelopenas'];
        $salsa = $_POST['salsa'];
        $cesnakinis = $_POST['cesnakinis'];


        DB::table('pirma_mini')->update(['campino' => "$campino"]);
        DB::table('pirma_mini')->update(['suris' => "$suris"]);
        DB::table('pirma_mini')->update(['kumpis' => "$kumpis"]);
        DB::table('pirma_mini')->update(['jelopenas' => "$jelopenas"]);
        DB::table('pirma_mini')->update(['salsa' => "$salsa"]);
        DB::table('pirma_mini')->update(['cesnakinis' => "$cesnakinis"]);
    }
}
