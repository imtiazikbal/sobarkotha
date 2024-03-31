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
        return view('backend.featured.edit',compact('featured'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Featured $featured)
    {
        $validate = $request->validate([
            'featured' => 'required',
        ]);
     $featured->update($validate);
     return redirect('/admin/featured')->with('success','Featured Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Featured $featured)
    {
        $featured->delete();
        return redirect('/admin/featured')->with('success','Featured Updated successfully');

    }
  


    function leadNewsUpdate(Request $request){

        $featured = News::with('category')->orderBy('showtotop', 'ASC')->limit(30)->get();
    return view('backend.leadNews.index',compact('featured'));
   // return  $featured;
    }
}
