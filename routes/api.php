<?php

use App\Http\Controllers\API\DishController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Resources\API\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', function(){
    return CategoryResource::collection(Category::all());
});

// Route::group(function(){});

    Route::apiResource('dishes', DishController::class)->only(['index', 'show']);
    Route::get('categories/{category}', [CategoryController::class, 'show']);
    Route::get('categories/{category}/dishes', [CategoryController::class, 'dishes']);
    Route::get('categories/{category}/dishes/{dish}', [DishController::class, 'show']);

