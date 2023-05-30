<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TembakauController;
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

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/', [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
// Route::get('/kasir', [HomeController::class, 'kasir'])->name('kasir');
Route::get('/tembakau', [TembakauController::class, 'mbako'])->name('tembakau');
Route::get('/tembakau/create', [TembakauController::class, 'create'])->name('create');
Route::post('/tembakau/store', [TembakauController::class, 'store'])->name('store');