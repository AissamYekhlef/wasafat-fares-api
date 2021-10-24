<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Ingredient;
use App\Models\PreparationStep;
use Dotenv\Validator;
use Illuminate\Http\Request;

class DishController extends Controller
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
        // $validated = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);
        $name = $request->name;
        $category_id = $request->category;
        $description = $request->description;
        $ingredients = $request->ingredients;
        $preparation_steps = $request->preparation_steps;
        $last = Dish::latest()->first();    
        $id = $last ? $last->id + 1 : 1;    
        $photo_name = 'd_' . $id . '.' . $request->file('photo')->getClientOriginalExtension();


        $request->file('photo')->storeAs('public/images', $photo_name); // save file locally

        $dish = Dish::create([
            'name'         => $name,
            'category_id'  => $category_id,
            'description'  => $description,
            'picture_name' => $photo_name
        ]);
        foreach ($ingredients as $key => $value) {
            if($value != null){
                Ingredient::create([
                    'description' => $value,
                    'order' => $key + 1,
                    'dish_id' => $dish->id
                ]);
            }
            
        }

        foreach ($preparation_steps as $key => $value) {
            if($value != null){
                PreparationStep::create([
                    'description' => $value,
                    'order' => $key + 1,
                    'dish_id' => $dish->id
                ]);
            }
            
        }

        return redirect(route('dishes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        $dish->ingredients;
        $dish->preparation_steps;
        return view('dish-details')->with('dish', $dish);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        return view('edit-dish')->with('dish', $dish);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $name = $request->name;
        $category_id = $request->category;
        $description = $request->description;
        $ingredients = $request->ingredients;
        $preparation_steps = $request->preparation_steps;
        $photo_name = $dish->picture_name;

        if($request->file('photo')){
            $photo_name = 'd_' . $dish->id . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('public/images', $photo_name);
        }

        $dish->update([
            'name'         => $name,
            'category_id'  => $category_id,
            'description'  => $description,
            'picture_name' => $photo_name
        ]);
        if($ingredients){
            Ingredient::where('dish_id', '=', $dish->id)->delete();
        }
        
        foreach ($ingredients as $key => $value) {
            if($value != null){
                Ingredient::create([
                    'description' => $value,
                    'order' => $key + 1,
                    'dish_id' => $dish->id
                ]);
            }
            
        }
        if($ingredients){
            PreparationStep::where('dish_id', '=', $dish->id)->delete();
        }

        foreach ($preparation_steps as $key => $value) {
            if($value != null){
                PreparationStep::create([
                    'description' => $value,
                    'order' => $key + 1,
                    'dish_id' => $dish->id
                ]);
            }
            
        }

        return redirect(route('dishes.show', $dish->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        //
    }
}
