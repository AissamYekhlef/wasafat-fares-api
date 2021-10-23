<?php

use App\Http\Controllers\API\DishController;
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

    Route::apiResource('dishes', DishController::class);
    // Route::get('dishes', [DishController::class, 'index']);
    // Route::apiResource('categories', [CategoryController::class])->only(['index', 'show']);

