<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where('status',true)->orderBy('showtotop', 'ASC')->get();
       // return view('backend.category.index',compact('category'));
        return view('backend.category.testing',compact('category'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'cName' => 'required',
        ]);
     Category::create($validate);
        return redirect()->back()->with('success','Category Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validate = $request->validate([
            'cName' => 'required',
        ]);
        $category->update($validate);
       return redirect('/admin/category')->with('success','Category Updated successfully');
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Category Updated successfully',
        //     'data'=> $data
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
         $category->delete();
       return redirect()->back()->with('warning','Category Deleted successfully');
        
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Category deleted successfully',
        //     'data'=> $data
        // ]);
    }

    public function sort(Request $request)
    {
        try {
            $categoryIds = $request->input('page_id_array');
    
            foreach ($categoryIds as $index => $categoryId) {
                Category::where('id', $categoryId)->update(['showtotop' => $index]);
            }
    
            return 'Category order updated successfully';
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
