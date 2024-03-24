<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\News;
use App\Helper\Bengali;
use App\Models\Category;
use App\Models\Featured;
use App\Models\Topic;
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

     $trending =  Topic::all();
    //Banglasesh Category
      $cBangladesh = Category::where('category_title','bangladesh')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
      $cBangladeshSkip1Take3 = Category::where('category_title','bangladesh')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(2))->first();
     
     // Rajniti Category
      $cRajniti = Category::where('category_title','rajniti')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
      $cRajnitiSkip1Take3 = Category::where('category_title','rajniti')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(2))->first();
     
      // SaraDesh Category
     
      $cSaraDesh = Category::where('category_title','saradesh')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
      $cSaraDeshSkip1Take3 = Category::where('category_title','saradesh')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(2))->first();

      // sports
      $cSports1 = Category::where('category_title','sports')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
      $cSports1SkipTake3 = Category::where('category_title','sports')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(3))->first();

      // sports 2 
      $cSports2 = Category::where('category_title','sports')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
      $sport2Old = Category::where('category_title','sports')->with('news',fn($q) => $q->where('status','published')->orderBy('id','desc')->take(4))->first();
 


    return view('fontend.home',compact('category','date','news','skip1Get2','featured','trending','cBangladesh','cRajniti','cSaraDesh','cBangladeshSkip1Take3','cRajnitiSkip1Take3','cSaraDeshSkip1Take3','cSports1','cSports1SkipTake3','cSports2','sport2Old'));

  // return view('fontend.home',['category'=>$category,'date'=>$date,'news'=>$news,'skip1Get2'=>$skip1Get2,'featured'=>$featured]);
       // return $news ;
  // return $skip1Get2 ;
 // return  $featured;
 //return $cBangladeshSkip1Take3;

 //return $cSports1;
 //return $sport2Old;


 

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

      //$news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
     // main fetured news skip 1 take 2

      $skip1Get2 = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(2))->first();
      $news =  News::where('id',$request->news_id)->with('category','division','district','user')->first();
      
      $trending =  Topic::all();
    
      $latest = News::where('status','published')->orderBy('id','desc')->first();
      
      $divisionNews = News::where('division_id',$request->division)->with('category','division','district','user')->get();

        return view('fontend.pages.details',compact('category','date','news','skip1Get2','featured','latest','trending','divisionNews'));
     //return $divisionNews;
    // return $latest;
    }



    function newsByTopic(Request $request,Topic $topic){
      $dateNew = date("h:i A - d F Y");
      $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
      // all category here
      $category = Category::all();

      // Nav bar featured news
      $featured = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(3))->first();
      // main featured news 1
    //$news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
   // main fetured news skip 1 take 2
    $skip1Get2 = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->skip(1)->take(2))->first();
    
  
    $trending =  Topic::all();
  
    $latest = News::where('status','published')->orderBy('id','desc')->first();
    
      $news = News::where('topic_id',$request->topic)->with('category','division','district','user')->first();
     
      return view('fontend.pages.topicDetails',compact('category','date','news','skip1Get2','featured','latest','trending'));
    }


}
