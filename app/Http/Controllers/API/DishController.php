<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\DishResource;
use App\Http\Resources\API\DishWithoutForignsResource;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate = $request->per_page ?? '25';

        $dishes = Dish::latest()->paginate($paginate);
        // $dishes = Dish::paginate($paginate);

        $dishes->withQueryString('per_page');

        return DishResource::collection($dishes);
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
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,  Dish $dish)
    {
        // $dish = Dish::find($dish);
        if(! $dish){
            return response()->json([
                'id' => $dish->id,
                'error' => '404',
                'message' => 'not found',
            ]);
        }

        return new DishResource($dish);
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

    public function lastDish(){
        $last_dish = Dish::latest()->first();
        return new DishWithoutForignsResource($last_dish);
    }
}
