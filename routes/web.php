<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAllController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
  ////////////////////////////////
 //  Авторизация и регистрация //
////////////////////////////////
Route::get('/login', [AuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [AuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [AuthController::class, 'logout']);


  ////////////////////////////////
 //    Профиль пользователя    //
////////////////////////////////
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('isLoggedIn')->name('dashboard');
Route::get('/user_all', [UserAllController::class, 'userAll'])->name('user-all');
Route::get('/user/{email}', [ProfileController::class, 'getProfile'])->name('profileUser');
