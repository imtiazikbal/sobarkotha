<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $district = District::all();
     return view('backend.district.index',compact('district'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $division = Division::all();
        return view('backend.district.create',compact('division'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'dist_name' => 'required',
            'division_id'=>'required'
        ]);
       $data = District::create($validate);
       return redirect()->back()->with('success','District created successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'District created successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, District $district)
    {
        $validate = $request->validate([
            'dist_name' => 'required',
            'division_id'=>'required'
        ]);
       $data =$district->update($validate);
        return response()->json([
            'success' => true,
            'message' => 'District Updated successfully',
            'data'=> $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        $district->delete();
        return response()->json([
            'success' => true,
            'message' => 'District Updated successfully',
            
        ]);

    }
}
