<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');

    // Kalau benar-benar tidak butuh show (karena pakai modal), hapus resource
    // Route::resource('materi', MateriController::class)->only(['index']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
