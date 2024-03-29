<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\CategoryResource;
use App\Http\Resources\API\DishResource;
use App\Models\Category;
use App\Models\Dish;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category  $category)
    {
        if(! $category){
            return response()->json([
                'id' => $category->id,
                'error' => '404',
                'message' => 'not found',
            ]);
        }
        $category->ingredients;
        $category->preparations_steps;

        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
            
    public function dishes(Request $request, $category)
    {
        $per_page = $request->per_page ?? '25';
        return DishResource::collection(
            Dish::where('category_id', '=', $category)->latest()->paginate($per_page)
        );
    }
}
