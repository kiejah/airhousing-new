<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function index(){
        return view('frontend.landing');
    }
    public function properties(){
        return view('frontend.properties');
    }
    public function about_us(){
        return view('frontend.about_us.about_us_main');
    }
}
