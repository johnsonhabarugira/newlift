<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    if(Auth::id()){
        $usertype = Auth()->user()->usertype;

        if($usertype=='user'){
            return view('home');
        }
        else 
        if($usertype=='user'){
            return view('admin');
        }
    }
}
