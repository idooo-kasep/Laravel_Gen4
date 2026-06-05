<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;

// =============================================
// Tugas 1 - Halaman Profil
// =============================================
Route::get('/profil', [ProfilController::class, 'index']);

// =============================================
// Tugas 2 - Halaman Produk
// =============================================
Route::get('/produk', [ProdukController::class, 'index']);

// =============================================
// Tugas 3 - Halaman Mahasiswa
// =============================================
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
