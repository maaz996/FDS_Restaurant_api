<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Models\Category;
use App\Models\Item;
use App\Models\Restaurant;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addrestaurant', [RestaurantController::class, 'create'])->name('addrestaurant');

Route::post('/addrestaurant', [RestaurantController::class, 'addData'])->name('addrestaurant');

Route::get('/addcategory', [CategoryController::class, 'create'])->name('addcategory');

Route::get('/additem', [ItemController::class, 'create'])->name('additem');

Route::post('/addcategory', [CategoryController::class, 'addData'])->name('addcategory');

Route::post('/additem', [ItemController::class, 'addData'])->name('additem');

Route::get('/restaurantList',[RestaurantController::class,'demo'])->name('restaurantList');

Route::get('/categoryList',[CategoryController::class,'demo'])->name('categoryList');

Route::get('/itemList',[ItemController::class,'demo'])->name('itemList');

Route::get('/delete-restaurant/{id}',[RestaurantController::class,'remove'])->name('restaurant.delete');

//Route::get('/delete/{id}',[CategoryController::class,'remove']);
Route::get('/delete-category/{id}', [CategoryController::class, 'remove'])->name('category.delete');


Route::get('/delete/{id}',[ItemController::class,'remove']);

Route::get('/editres/{id}',[RestaurantController::class,'edit'])->name('editres');
Route::post('editres', [RestaurantController::class, 'update'])->name('editres');

Route::get('/editcat/{id}',[CategoryController::class,'edit'])->name('editcat');
Route::post('editcat', [CategoryController::class, 'update'])->name('editcat');

Route::get('/edititem/{id}',[ItemController::class,'edit'])->name('edititem');
Route::post('edititem', [ItemController::class, 'update'])->name('edititem');
