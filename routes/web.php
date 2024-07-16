<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);


Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/', function () {
    return view('welcome');

});

Route::get('/dashboard', function () {
    return view('users.dashboard');
})->name('dashboard');

Route::get('/admindashboard', function(){
    return view('admin.dashboard');
})->name('admindashboard');

Route::post('/logout', function () {
    // Implement your logout logic here
    // For example, clearing session or invalidating tokens
    return redirect('/login');
})->name('logout');

