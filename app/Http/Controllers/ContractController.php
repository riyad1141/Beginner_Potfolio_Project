<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{


    function page(Request $request){
        return view('pages.contract');
    }

    function contractRequest(Request $request){
        return DB::table('contracts')->insert($request->input());
    }



}
