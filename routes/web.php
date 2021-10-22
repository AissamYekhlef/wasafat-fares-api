<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});

// Route::view('/t', 'tailwind');


Route::middleware(['auth', 'admin'])->group(function(){

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::view('/dishes', 'dishes-table')->name('dishes.index');
    Route::view('/dishes/create', 'create-dish')->name('dishes.create');
    Route::post('/dishes', [DishController::class, 'store'])->name('dishes.store');
    Route::view('/category', 'categories-table')->name('category.index');
    Route::view('/category/create', 'category-create')->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');


});
