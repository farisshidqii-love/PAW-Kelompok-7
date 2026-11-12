<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DokterController::class, 'index'])->name('dokter.index');

//Belum login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
});

// Sudah login
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Tambah dan edit data untuk admin dan staff
    Route::middleware('role:admin,staff')->group(function () {
        Route::get('/dokter/tambah', [DokterController::class, 'create'])->name('dokter.tambah');
        Route::post('/dokter', [DokterController::class, 'store'])->name('dokter.store');
        Route::get('/dokter/{dokter}/edit', [DokterController::class, 'edit'])->name('dokter.edit') ->can('update', 'dokter');;    
        Route::put('/dokter/{dokter}', [DokterController::class, 'update'])->name('dokter.update') ->can('update', 'dokter');;
    });

    // hapus data untuk admin
    Route::delete('/dokter/{dokter}', [DokterController::class, 'destroy'])
        ->name('dokter.destroy')
        ->middleware('role:admin')
        ->can('kelola-dokter-penuh');
});