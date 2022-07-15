<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\PelangganController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('/pelanggan', PelangganController::class);
Route::resource('/tarif', TarifController::class);
Route::resource('/bayar', BayarController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
