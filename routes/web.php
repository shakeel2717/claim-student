<?php

use App\Http\Controllers\adminAuth;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\auth;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\StudentController;
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

Route::get('/register', [auth::class, 'register'])->name('register');
Route::post('/register', [auth::class, 'regsiterReq'])->name('regsiterReq');

Route::get('/login', [auth::class, 'login'])->name('login');
Route::post('/login', [auth::class, 'loginReq'])->name('loginReq');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/index', [dashboard::class, 'index'])->name('dashboard');
    Route::resource('complain', ComplaintController::class);
    Route::get('complainReply/{complain}', [ComplaintController::class, 'complainReply'])->name('complainReply');
});

Route::redirect('/', '/dashboard/index');
Route::redirect('/admin', '/admin/dashboard/index');
Route::prefix('/admin')->group(function () {
    Route::get('/login', [adminAuth::class, 'login'])->name('adminlogin');
    Route::post('/login', [adminAuth::class, 'loginReq'])->name('adminloginReq');
});

Route::prefix('admin/dashboard')->middleware(['admin'])->group(function () {
    Route::get('/index', [adminDashboard::class, 'index'])->name('adminDashboard');
    Route::get('/all-complains', [adminDashboard::class, 'complainIndex'])->name('complainIndex');
    Route::resource('student', StudentController::class);
    Route::get('studentRegister', [StudentController::class, 'studentRegister'])->name('student.register');
    
    Route::get('/complaintUpdate/{complain}/{status?}', [adminDashboard::class, 'complaintUpdate'])->name('complaintUpdate');
    Route::get('/complaintReply/{complain}', [adminDashboard::class, 'complaintReply'])->name('complaintReply');
    Route::post('/complaintReply', [adminDashboard::class, 'complaintReplyReq'])->name('complaintReplyReq');
    
});

// Logout from System
Route::get('/logout', [auth::class, 'logout'])->name('logout');
