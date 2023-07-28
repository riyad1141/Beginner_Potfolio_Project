<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{


    function page(Request $request){
        $seo = DB::table('_seo_properties')->where('pageName','=','contact')->first();
        return view('pages.contract',['seo'=>$seo]);
    }

    function contractRequest(Request $request){
//        sleep(5);
        return DB::table('contracts')->insert($request->input());
    }



}
