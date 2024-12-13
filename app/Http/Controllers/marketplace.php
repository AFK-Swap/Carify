<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class marketplace extends Controller
{
    //
    function marketplace(){
        $marketplace= DB::select('select * from car');
        return view('marketplace',['marketplace'=>$marketplace]);
    }
}
