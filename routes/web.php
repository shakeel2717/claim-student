<?php

use App\Http\Controllers\auth;
use App\Http\Controllers\dashboard;
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

Route::get('/register',[auth::class,'register'])->name('register');
Route::post('/register',[auth::class,'regsiterReq'])->name('regsiterReq');

Route::get('/login',[auth::class,'login'])->name('login');
Route::post('/login',[auth::class,'loginReq'])->name('loginReq');

Route::get('/dashboard',[dashboard::class,'index'])->name('dashboard');

