<?php

use App\Models\Dish;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\CategoryController;

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
Route::resource('/dish',DishController::class);

Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/order/{order}/approve',[OrderController::class,'approve'])->name('order.approve');
Route::get('/order/{order}/ready',[OrderController::class,'ready'])->name('order.ready');
Route::get('/order/{order}/cancel',[OrderController::class,'cancel'])->name('order.cancel');

Route::resource('/category',CategoryController::class);

// ajax
Route::get('/waiter/cart',[WaiterController::class,'addToCart'])->name('waiter.cart');
Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
