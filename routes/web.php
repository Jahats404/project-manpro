<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TembakauController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('/', [LoginController::class, 'halamanLogin'])->name('login');
// Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
// Route::get('/kasir', [HomeController::class, 'kasir'])->name('kasir');
Route::middleware(['auth'])->group(function(){
    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::get('/tembakau', [TembakauController::class, 'mbako'])->name('tembakau');  
    Route::get('/create', [TembakauController::class, 'create'])->name('create');
    Route::post('/store', [TembakauController::class, 'store'])->name('store');
    Route::get('/tembakau/{id}/edit', [TembakauController::class, 'edit'])->name('edit');
    Route::put('/tembakau/{id}', [TembakauController::class, 'update'])->name('update');
    Route::delete('/tembakau/{id}', [TembakauController::class, 'destroy'])->name('destroy');
    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
    Route::get('/tembakau/search', [TembakauController::class, 'search'])->name('search');
});


// Route::get('/stok', function () {
//     return view('stok');
// });

Route::get('/laporan', function () {
    return view('laporan');
});