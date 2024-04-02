<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\News;
use App\Models\Topic;
use App\Helper\Bengali;
use App\Models\Upazila;
use App\Models\Category;
use App\Models\District;
use App\Models\Division;
use App\Models\Featured;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    function lead()
    {
        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date('h:i A - d F Y');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::all();
        $sidebarCat = Category::all();

        // Nav bar featured news
        $featured = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();
        // main featured news 1
        $news = News::with('category')->orderBy('showtotop', 'ASC')->limit(1)->get();

        // $news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
        // main fetured news skip 1 take 2
        $skip1Get2 = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(2))->first();

        return view('fontend.component.leadnews2', compact('category', 'date', 'news', 'skip1Get2', 'featured'));
    }
    function index()
    {
        //date and time here
        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date('l j F Y');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::orderBy('showtotop', 'ASC')->get();
        $sidebarCat = Category::all();
        // Nav bar featured news
        $featured = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();
        // main featured news 1
        $news = News::with('category')->orderBy('showtotop', 'ASC')->limit(1)->get();

        // $news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
        // main fetured news skip 1 take 2
        //  $skip1Get2 = News::with('category')->orderBy('showtotop', 'ASC')->latest()->skip(1)->take(2)->first();
       // $skip1Get2 = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(3))->first();
        $leadNews3 = News::where('status', 'published')->skip(1)->take(3)->get();

        // Main feartured skip 3 get 6 news
       $skip4get6 = News::where('status', 'published')->skip(4)->take(6)->get();
        

        $trending = Topic::all();
        //Banglasesh Category
        $cBangladesh = Category::where('category_title', 'bangladesh')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(1))->first();
        $cBangladeshSkip1Take3 = Category::where('category_title', 'bangladesh')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(2))->first();

        // Rajniti Category
        $cRajniti = Category::where('category_title', 'rajniti')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(1))->first();
        $cRajnitiSkip1Take3 = Category::where('category_title', 'rajniti')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(2))->first();

        // SaraDesh Category

        $cSaraDesh = Category::where('category_title', 'saradesh')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(1))->first();
        $cSaraDeshSkip1Take3 = Category::where('category_title', 'saradesh')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(2))->first();

        //apanr Jonno
        $ApnarJonno = Category::where('category_title', 'bangladesh')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(4))->first();
        


        // sports
        $cSports1 = Category::where('category_title', 'sports')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(1))->first();
        $cSports1SkipTake3 = Category::where('category_title', 'sports')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(4))->first();

        // sports 2
        $cSports2 = Category::where('category_title', 'sports')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(1))->first();
        $sport2Old = Category::where('category_title', 'sports')->with('news', fn($q) => $q->where('status', 'published')->orderBy('id', 'asc')->take(4))->first();

        //popular
        $latest = News::where('status', 'published')->orderBy('id', 'desc')->first();

        // scroll news
        $scrollNews = News::where('scroll', '1')->where('status', 'published')->orderBy('id', 'desc')->get();

        return view('fontend.home', compact('category', 'date', 'news', 'leadNews3', 'featured', 'trending', 'cBangladesh', 'cRajniti', 'cSaraDesh', 'cBangladeshSkip1Take3', 'cRajnitiSkip1Take3', 'cSaraDeshSkip1Take3', 'cSports1', 'cSports1SkipTake3', 'cSports2', 'sport2Old', 'skip4get6', 'latest', 'scrollNews','ApnarJonno','sidebarCat'));

 //  return $skip4get6 ;
        // return $leadNews3 ;
        // return  $featured;
        //return $cBangladeshSkip1Take3;

        //return $cSports1;
        //return $sport2Old;
        //return $skip1Get2;
        //return $scrollNews;
    }

    function getNewsByCategory(Request $request, Category $category)
    {
        //Essential for all page here

        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date('l j F Y');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::orderBy('showtotop', 'ASC')->get();
        $sidebarCat = Category::orderBy('showtotop', 'ASC')->get();
        $featured = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();
        $trending = Topic::all();

        $scrollNews = News::where('scroll', true)->where('status', 'published')->get();
        $latest = News::where('status', 'published')->orderBy('id', 'desc')->first();

        // start here
        $news = Category::where('id', $request->category)
            ->with('news', fn($q) => $q->where('status', 'published')->latest()->take(1))
            ->first();

        //skip 1 take 6 latest news
        $catNewsSkip1Get6 = Category::where('id', $request->category)
            ->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(6))
            ->first();

        //skip 7 get 30

        $catNewsSkip7Get30 = Category::where('id', $request->category)
            ->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(7)->take(30))
            ->first();

        return view('fontend.pages.CatDetails', compact('news', 'date', 'category', 'featured', 'trending', 'scrollNews', 'catNewsSkip1Get6', 'catNewsSkip7Get30', 'latest','sidebarCat'));
        //return $news;
    }

    function getNewsByTitle(Request $request, News $news)
    {
        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date('l j F Y');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::orderBy('showtotop', 'ASC')->get();
        $sidebarCat = Category::orderBy('showtotop', 'ASC')->get();
        // Nav bar featured news
        $featured = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();
        // main featured news 1

        //$news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
        // main fetured news skip 1 take 2

        $skip1Get2 = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(2))->first();
        $news = News::where('id', $request->news_id)
            ->with('category', 'division', 'district', 'user')
            ->first();

        $trending = Topic::all();

        $latest = News::where('status', 'published')->orderBy('id', 'desc')->first();

        $divisionNews = News::where('division_id', $request->division)
            ->with('category', 'division', 'district', 'user')
            ->get();

        //scroll
        $scrollNews = News::where('scroll', '1')->where('status', 'published')->orderBy('id', 'desc')->get();
        return view('fontend.pages.details', compact('category', 'date', 'news', 'skip1Get2', 'featured', 'latest', 'trending', 'divisionNews', 'scrollNews','sidebarCat'));
        //return $divisionNews;
        // return $latest;
    }

    function newsByTopic(Request $request, Topic $topic)
    {
        $dateNew = date('l j F Y');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::orderBy('showtotop', 'ASC')->get();
        $sidebarCat = Category::orderBy('showtotop', 'ASC')->get();
        // Nav bar featured news
        $featured = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();
        // main featured news 1
        //$news = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(1))->first();
        // main fetured news skip 1 take 2
        $skip1Get2 = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->skip(1)->take(2))->first();
        $scrollNews = News::where('scroll', '1')->where('status', 'published')->orderBy('id', 'desc')->get();

        $trending = Topic::all();

        $latest = News::where('status', 'published')->orderBy('id', 'desc')->first();

        $news = News::where('topic_id', $request->topic)
            ->with('category', 'division', 'district', 'user')
            ->first();

        return view('fontend.pages.topicDetails', compact('category', 'date', 'news', 'skip1Get2', 'featured', 'latest', 'trending', 'scrollNews','sidebarCat'));
    }

    function searchNews(Request $request)
    {
        //Essential for all page here

        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date('l j F Y');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category = Category::orderBy('showtotop', 'ASC')->get();
        $sidebarCat = Category::orderBy('showtotop', 'ASC')->get();
        $featured = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();
        $trending = Topic::all();

        $scrollNews = News::where('scroll', true)->where('status', 'published')->get();
        $latest = News::where('status', 'published')->orderBy('id', 'desc')->first();
       

        $news = News::with('category','division','district','upazila','user')->where('status','published')->where('title','like','%'.$request->search.'%')->orWhere('nBody','like','%'.$request->search.'%')->get();
       
        return view('fontend.pages.searchNewsPage', compact('news', 'category', 'date', 'featured', 'trending', 'scrollNews', 'latest','sidebarCat'));
     // return $news;
      }
      function bangladeshDistrictNews(Request $request){
        //Essential for all page here

        date_default_timezone_set('Asia/Dhaka');
        $dateNew = date('l j F Y');
        $date = Bengali::bn_date_time($dateNew); // ১০ জানুয়ারি ২০২৫
        // all category here
        $category =Category::orderBy('showtotop', 'ASC')->get();
        $sidebarCat =Category::orderBy('showtotop', 'ASC')->get();
        $featured = Featured::where('featured', '=', 'Main')->with('news', fn($q) => $q->where('status', 'published')->latest()->take(3))->first();
        $trending = Topic::all();

        $scrollNews = News::where('scroll', true)->where('status', 'published')->get();
        $latest = News::where('status', 'published')->orderBy('id', 'desc')->first();
        $division_id = $request->division;
       // $news = News::Where('district_id', $request->district)->orWhere('division_id', $request->division)->orWhere('upazila_id', $request->upazila)->with('category','division','district','upazila','user')->where('status','published')->get();
       $news = News::where('district_id', $request->district)->with('category','division','district','upazila','user')->where('status','published')->get();
        
      
        return view('fontend.pages.amarKhabor', compact('category', 'date', 'news', 'featured', 'trending', 'scrollNews', 'latest','sidebarCat'));
      // return $news;
      }


      
       // api 

       function getDivision(Request $request){

        $division = Division::all();
        return response()->json($division);
    }
    function getDistrictFromDivision(Request $request, District $district){

        $district = District::where('division_id',$request->division_id)->get();
        return response()->json($district);
    }
    function getUpazila(Request $request, Upazila $upazila){

        $upazila = Upazila::where('district_id',$request->district_id)->get();
        return response()->json($upazila);
    }
}
