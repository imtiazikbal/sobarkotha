<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topic =  Topic::all();
       return view('backend.topic.index',compact('topic'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.topic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'topic' => 'required',
        ]);
        Topic::create($validate);

        return redirect()->back()->with('success','Topic  created successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Topic  created successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
       return view('backend.topic.edit',compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        $validate = $request->validate([
            'topic' => 'required',
        ]);
       $topic->update($validate);

        return redirect('/admin/topic')->with('success','Topic  Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect('/admin/topic')->with('warning', 'Topic deleted successfully');
    }
}
