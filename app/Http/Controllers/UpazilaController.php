<?php

namespace App\Http\Controllers;

use App\Models\Upazila;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        $upazila = Upazila::all();
        return view('backend.upazila.index',compact('upazila'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $district = District::all();
     return view('backend.upazila.create',compact('district'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'upazila_name' => 'required|max:255',
            'district_id' => 'required',
        ]);
        $data = Upazila::create($validate);

        return redirect()->back()->with('success','Upazila created successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Upazila created successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Upazila $upazila)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upazila $upazila)
    {
       $upazila = Upazila::where('id',$upazila->id)->with('district','district.division')->first();
       $district = District::all();
       $division = Division::all();
       return view('backend.upazila.edit',compact('upazila','district','division'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upazila $upazila)
    {
        $validate = $request->validate([
            'upazila_name' => 'required|max:255',
            'district_id' => 'required',
        ]);
       $upazila->update($validate);
       return redirect()->back()->with('success','Upazila created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upazila $upazila)
    {
        $upazila->delete();
        return redirect('/admin/upazila')->with('success','Upazila deleted successfully');

    }
}
