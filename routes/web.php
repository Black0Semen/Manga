<?php

use App\Http\Controllers\Auto\RegisterController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Auto\LoginController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'mainShow']);
Route::get('/top', [IndexController::class, 'top']);
Route::get('/order', [IndexController::class, 'order']);
Route::get('/zakladki', [IndexController::class, 'zakladki']);

Route::get('/search', [IndexController::class, 'search']);
Route::get('/search', [IndexController::class, 'findSomeThing']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

//Route::get('/profile', function () {})->middleware('auth');
//админ
Route::get('/admin', [AdminController::class, 'index'])->name('home');
Route::patch('/edit', [AdminController::class, 'update'])->name('update');
Route::delete('/delete/{user}', [AdminController::class, 'delete'])->name('delete');
Route::get('/edit/{user}', [AdminController::class, 'edit'])->name('edit');