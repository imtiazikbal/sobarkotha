<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $news = News::with('category','division','district','upazila')->where('status','published')->get();
     //   return $news;
       //return "ok";
       return view('backend.news.index',compact('news'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'nBody' => 'required',
            'nCaption' => 'required',
            'nTag' => 'required',
          

        ]);
        $img = $request->file('image');
        $t = time();
        $file_name = $img->getClientOriginalName();
        $img_name = "slider-{$t}-{$file_name}";
        $img_url = "uploads/news/{$img_name}";
        // Upload File
        $img->move(public_path('uploads/news'), $img_name);

        $data = News::create([
            'title'=>$request->title,
            'nBody'=>$request->nBody,
            'nCaption'=>$request->nCaption,
            'nTag'=>json_encode($request->nTag),
            'image'=>$img_url,
            'topic_id'=>$request->topic_id,
            'user_id'=>$request->user_id,
            'category_id'=>$request->category_id,
            'sub_category_id'=>$request->sub_category_id,
            'featured_id'=>$request->featured_id,
            'division_id'=>$request->division_id,
            'district_id'=>$request->district_id,
            'upazila_id'=>$request->featured_id,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'News created successfully',
            'data'=> $data
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
