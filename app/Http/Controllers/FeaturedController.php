<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Featured;
use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featured = Featured::all();
        return view('backend.featured.index',compact('featured'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.featured.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'featured' => 'required',
        ]);
       $data = Featured::create($validate);
       return redirect()->back()->with('success','Featured created successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Featured created successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Featured $featured)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Featured $featured)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Featured $featured)
    {
        $validate = $request->validate([
            'featured' => 'required',
        ]);
       $data = $featured->update($validate);
        return response()->json([
            'success' => true,
            'message' => 'Featured created successfully',
            'data'=> $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Featured $featured)
    {
        $featured->delete();
        return response()->json([
            'success' => true,
            'message' => 'fFatured deleted successfully'
        ]);
    }
  


    function leadNewsUpdate(Request $request){

        $featured = News::with('division')->latest()->take(30)->get();
      return view('backend.leadNews.index',compact('featured'));
    // return  $featured;
    }
}
