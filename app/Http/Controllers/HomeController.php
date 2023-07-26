<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    function page(Request $request){
        return view('pages.home');
    }

    function heroDate(Request $request){
        return DB::table('_hero_properties')->first();
    }

    function socialData(Request $request){
        return DB::table('socials')->first();
    }

    function aboutData(Request $request){
        return DB::table('abouts')->first();
    }


}
