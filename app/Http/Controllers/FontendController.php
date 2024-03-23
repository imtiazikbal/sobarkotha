<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\News;
use App\Helper\Bengali;
use App\Models\Category;
use App\Models\Featured;
use Illuminate\Http\Request;

class FontendController extends Controller
{

    function lead(){
        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date("h:i A - d F Y");
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::all();

        // Nav bar featured news
        $featured = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(3))->first();
        // main featured news 1
      $news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
     // main fetured news skip 1 take 2
      $skip1Get2 = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(2))->first();

    

    return view('fontend.component.leadnews2',compact('category','date','news','skip1Get2','featured'));
       
    }
    function index(){
       //date and time here
        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date("h:i A - d F Y");
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::all();

        // Nav bar featured news
        $featured = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(3))->first();
        // main featured news 1
      $news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
     // main fetured news skip 1 take 2
      $skip1Get2 = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(2))->first();

    

    return view('fontend.home',compact('category','date','news','skip1Get2','featured'));
  // return view('fontend.home',['category'=>$category,'date'=>$date,'news'=>$news,'skip1Get2'=>$skip1Get2,'featured'=>$featured]);
       // return $news ;
  // return $skip1Get2 ;
 // return  $featured;

 

    }



    function getNewsByCategory(Request $request,Category $category){

       $news = News::with('category','division','district')->where('category_id',$request->category)->where('status','published')->latest()->get();
       return $news;

    }
    function getNewsByTitle(Request $request,News $news){
      date_default_timezone_set('Asia/Dhaka');
        $dateNew = date("h:i A - d F Y");
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::all();

        // Nav bar featured news
        $featured = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(3))->first();
        // main featured news 1
      $news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
     // main fetured news skip 1 take 2
      $skip1Get2 = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(2))->first();
        $news =  News::where('id',$request->news_id)->with('category','division','district','user')->first();
       return view('fontend.pages.details',compact('category','date','news','skip1Get2','featured'));
     // return $news;
    }


}
