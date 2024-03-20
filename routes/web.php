<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'password/confirm' => false,
    'reset' => false,
    'verify' => false,
  ]);

Route::get('/home', [OrderController::class, 'index'])->name('home');
Route::resource('/dish',DishController::class);
