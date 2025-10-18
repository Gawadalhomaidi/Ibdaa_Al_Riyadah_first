<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ERPController;
// Routes الرئيسية
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Routes المصادقة
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// الصفحة الرئيسية: إعادة توجيه للغة الافتراضية
Route::get('/', function () {
    return redirect('/en');
});

// صفحة الهبوط متعددة اللغات
Route::get('/{locale}', [ERPController::class, 'index'])->name('landing');

// تغيير اللغة
Route::get('/lang/{locale}', [ERPController::class, 'switchLang'])->name('lang.switch');

// Dashboard بعد تسجيل الدخول
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


