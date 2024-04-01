<?php

use App\Models\Dish;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WaiterController;


Route::get('/', [WaiterController::class,'index']);
Route::get('/{category}/dishes', [WaiterController::class,'filterByCategory'])->name('category.dishes');
Route::get('/waiter/dish/{dish}', [WaiterController::class,'show'])->name('waiter.dish.detail');

Auth::routes([
    'password/confirm' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [OrderController::class, 'index'])->name('home');
Route::resource('/dish',DishController::class);
