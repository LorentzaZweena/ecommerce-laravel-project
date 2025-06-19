<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route untuk halaman login
Route::middleware(['auth'])->group(function (){
    // ini untuk halaman user
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
});

// Route untuk halaman login
Route::middleware(['auth', AuthAdmin::class])->group(function (){
    // ini untuk halaman admin
    // jika user sudah login sebagai admin, maka akan diarahkan ke halaman admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
