<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        if(auth()->user()->role ==='user'){
            return view('welcome');
        }else{
            return view('dashboard');
        }
       
    }
}
