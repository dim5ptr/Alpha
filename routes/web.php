<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// Route untuk halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route untuk halaman register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route untuk halaman forgot password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');
Route::middleware(['auth'])->group(function () {
    // Rute untuk menampilkan form update profil
    Route::get('/profile', [AuthController::class, 'showProfileForm'])->name('profile');

    // Rute untuk memproses update profil
    Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
});
// Route untuk aktivasi akun
Route::get('/activate/{token}', [AuthController::class, 'activate'])->name('activate');

// Route untuk halaman admin
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Tambahkan route admin lainnya di sini
});

// Route untuk halaman pengguna
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    // Tambahkan route pengguna lainnya di sini
});

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
