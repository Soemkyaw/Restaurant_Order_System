<?php

use App\Models\Dish;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WaiterController;

Auth::routes([
    'password/confirm' => false,
    'reset' => false,
    'verify' => false,
]);

// waiter panel
Route::get('/', [WaiterController::class,'index']);
Route::get('/{category}/dishes', [WaiterController::class,'filterByCategory'])->name('category.dishes');
Route::get('/waiter/dish/{dish}', [WaiterController::class,'show'])->name('waiter.dish.detail');

// cart
Route::get('/cart/list',[CartController::class,'index'])->name('cart.index');

// kitchen panel
Route::get('/home', [OrderController::class, 'index'])->name('home');
Route::resource('/dish',DishController::class);

// ajax
Route::get('/waiter/cart',[WaiterController::class,'addToCart'])->name('waiter.cart');
