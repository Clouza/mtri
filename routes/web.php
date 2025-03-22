<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;

// Route default (redirect ke login jika belum login)
Route::get('/', function () {
    return redirect()->route('login');
});

// Group tamu (guest)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Group terautentikasi
Route::middleware('auth')->group(function () {
    // Resource Materi
    Route::resource('materi', MateriController::class)
        ->only(['index', 'show']);
    // only index & show, jika kamu belum mau menampilkan form create/edit

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
