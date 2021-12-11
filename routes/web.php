<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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
Route::get('/', function () {
    return view('home');
});

// LOGIN ROUTE
Route::get('/login', [LoginController::class, 'Index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'Masuk']);

// LOGOUT ROUTE
Route::post('/logout', [LoginController::class, 'Keluar']);

// DASHBOARD ROUTE
Route::get('/dashboard', [DashboardController::class, 'Index'])->middleware('auth');

// DASHBOARD ROUTE (KHUSUS ADMIN)
//Route::get('/dashboard/data-barang', [DataBarangController::class, 'Index'])->except('show')->middleware('admin');