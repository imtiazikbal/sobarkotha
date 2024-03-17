<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    function index(){
        $category = Category::all();
        return view('fontend.home',compact('category'));
    } 
}
