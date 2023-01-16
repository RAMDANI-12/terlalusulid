<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LogResController;

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
    return view('landing.index');
});

Route::get('index',[LandingController::class,'index'])->name('index');
Route::get('why',[LandingController::class,'why'])->name('why')->middleware('auth');


Route::get('register',[LogResController::class,'regis'])->name('register');
Route::get('login',[LogResController::class,'login'])->name('login');


Route::get('read', function () {
    return view('readmore');
});