<?php

use App\Http\Controllers\Auto\RegisterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'mainShow']);
Route::get('/top', [IndexController::class, 'top']);
Route::get('/order', [IndexController::class, 'order']);

Route::get('/search', [IndexController::class, 'search']);
Route::get('/search', [IndexController::class, 'findSomeThing']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

