<?php

use App\Http\Controllers\UserController;
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


Route::get('/',[UserController::class,'index'])->name('login');
Route::post('login',[UserController::class,'store'])->name('login.store');

Route::get('registration',[UserController::class,'register'])->name('register');
Route::post('register/store',[UserController::class,'registerStore'])->name('register.store');
