<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekupController;
use App\Http\Controllers\PasienController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

//Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index'])->name('pasien');

//Route::get('/pasien', function() {
  //  return view('pasien');
//})->name('pasien')->middleware('auth');

//Route::resource('/Pasien', \App\Http\Controllers\PasienController::class)
    //->middleware('auth');

Route::resource('Pasiens', \App\Http\Controllers\PasienController::class)
    ->middleware('auth');

Route::resource('Cekups', \App\Http\Controllers\CekupController::class)
    ->middleware('auth');

