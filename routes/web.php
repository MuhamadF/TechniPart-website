<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBarangController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\CartController;

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

// HOME ROUTE
Route::get('/', [BelanjaController::class, 'Index']);

// LOGIN ROUTE
Route::get('/login', [LoginController::class, 'Index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'Masuk']);

// REGISTRASI ROUTE
Route::get('/register', [RegisterController::class, 'Index']);
Route::post('/register', [RegisterController::class, 'store']);

// LOGOUT ROUTE
Route::post('/logout', [LoginController::class, 'Keluar'])->middleware('auth');

// DASHBOARD ROUTE
Route::get('/dashboard', [DashboardController::class, 'Index'])->middleware('auth');

// DASHBOARD ADMIN ROUTE
Route::resource('/dashboard/barang', DashboardBarangController::class)->middleware('admin');
Route::resource('/dashboard/category', DashboardCategoryController::class)->middleware('admin');

// SHOW ROUTE
Route::get('/detail/{barang:slug}', [BelanjaController::class, 'show']);

// CART
Route::resource('/dashboard/cart', CartController::class)->middleware('auth');
