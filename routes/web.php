<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;

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

// Authentication Routes
Route::get('/', [UserController::class, 'index'])->name('login');
Route::post('login', [UserController::class, 'store'])->name('login.store');
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('registration', [UserController::class, 'register'])->name('register');
Route::post('register/store', [UserController::class, 'registerStore'])->name('register.store');

// User CRUD Routes
Route::get('users', [CrudController::class, 'index'])->name('user.index');
Route::get('users/create', [CrudController::class, 'create'])->name('user.create');
Route::post('users/store', [CrudController::class, 'store'])->name('user.store');
Route::get('users/{id}', [CrudController::class, 'show'])->name('user.show');
Route::get('users/{id}/edit', [CrudController::class, 'edit'])->name('user.edit');
Route::put('users/{id}', [CrudController::class, 'update'])->name('user.update');
Route::delete('users/{id}', [CrudController::class, 'destroy'])->name('user.destroy');
