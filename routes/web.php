<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ObatController::class, 'index'])->name('obat.index');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/obat/tambah', [ObatController::class, 'create'])->name('obat.create');
    Route::post('/obat', [ObatController::class, 'store'])->name('obat.store');
    Route::get('/obat/{obat}/edit', [ObatController::class, 'edit'])->name('obat.edit');
    Route::put('/obat/{obat}', [ObatController::class, 'update'])->name('obat.update');
    Route::delete('/obat/{obat}', [ObatController::class, 'destroy'])->name('obat.destroy');
});