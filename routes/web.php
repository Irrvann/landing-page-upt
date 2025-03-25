<?php

use App\Http\Controllers\landingPageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SosmedController;  
use Illuminate\Support\Facades\Route;

// Rute Landing Page
Route::get('/', [landingPageController::class, 'index']);
Route::get('/dashboard', [landingPageController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Rute Dashboard
// Route::get('/dashboard', [landingPageController::class, 'dashboard']);

    // Rute Master Tentang
Route::middleware('auth')->group(function () {
    Route::get('/master/tentang', [AboutController::class, 'index']);
    Route::get('/master/tentang-create', [AboutController::class, 'create']);
    Route::get('/master/tentang-edit/{id}', [AboutController::class, 'edit']);
    Route::post('/master/tentang-tambah', [AboutController::class, 'store']);
    Route::put('/master/tentang-ubah/{id}', [AboutController::class, 'update']);
    Route::delete('/master/tentang-hapus/{id}', [AboutController::class, 'destroy']);

    // Rute Master Services
    Route::get('/master/services', [ServicesController::class, 'index']);
    Route::get('/master/services-create', [ServicesController::class, 'create']);
    Route::get('/master/services-edit/{id}', [ServicesController::class, 'edit']);
    Route::post('/master/services-tambah', [ServicesController::class, 'store']);
    Route::put('/master/services-ubah/{id}', [ServicesController::class, 'update']);
    Route::delete('/master/services-hapus/{id}', [ServicesController::class, 'destroy']);

    // Rute Master Galeri
    Route::get('/master/galeri', [GalleryController::class, 'index']);
    Route::post('/master/galeri-tambah', [GalleryController::class, 'store']);
    Route::put('/master/galeri-ubah/{id}', [GalleryController::class, 'update']);
    Route::delete('/master/galeri-hapus/{id}', [GalleryController::class, 'destroy']);

    // Rute Master Kontak
    Route::get('/master/kontak', [ContactController::class, 'index']);
    Route::post('/master/kontak-tambah', [ContactController::class, 'store']);
    Route::put('/master/kontak-ubah/{id}', [ContactController::class, 'update']);
    Route::delete('/master/kontak-hapus/{id}', [ContactController::class, 'destroy']);

    // Rute Profile (Autentikasi)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Master Sosial Media
    Route::get('/master/sosmed', [SosmedController::class, 'index']);
    Route::post('/master/sosmed-tambah', [SosmedController::class, 'store']);
    Route::put('/master/sosmed-ubah/{id}', [SosmedController::class, 'update']);
    Route::delete('/master/sosmed-hapus/{id}', [SosmedController::class, 'destroy']);
});


require __DIR__.'/auth.php';
