<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::withCount('dishes')->latest()->get();

        return view('categories-table')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->name
        ]); 
        
        $photo_name = 'c_' . $category->id . '.' . $request->file('photo')->getClientOriginalExtension();

        $category->picture_name = $photo_name;
        $category->save();

       
        $file = $request->file('photo')->storeAs('public/images', $photo_name); // save file locally

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('show-category')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('edit-category')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($category && $category != null){

        }
        $category->update(['name' => $request->name]); 
        $photo_name = $category->picture_name;

        if($request->file('photo')){
            $photo_name = 'c_' . $category->id . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('public/images', $photo_name); 
        }
        
        $category->picture_name = $photo_name;
        $category->save();

        return redirect(route('category.show', $category->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
