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
    Route::get('/dishes/{dish}', [ DishController::class, 'show'])->name('dishes.show');
    Route::put('/dishes/{dish}', [ DishController::class, 'update'])->name('dishes.update');
    Route::get('/dishes/{dish}/edit', [ DishController::class, 'edit'])->name('dishes.edit');
    Route::post('/dishes', [DishController::class, 'store'])->name('dishes.store');
    Route::view('/categories', 'categories-table')->name('category.index');
    Route::view('/categories/create', 'category-create')->name('category.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');


});
