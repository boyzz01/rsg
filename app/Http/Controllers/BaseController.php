<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    function index(){
        if (session()->has('userid')){
            return redirect()->route('dashboard.index');
        }else {
            return view('login'); 
        }
      
    }
}
