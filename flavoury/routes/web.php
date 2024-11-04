<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

// Form tambah resep dengan middleware autentikasi
Route::get('/addrecipe', [RecipeController::class, 'create'])->middleware(['auth', 'verified'])->name('addRecipe');

// Penyimpanan resep menggunakan method store pada RecipeController
Route::post('/recipe/store', [RecipeController::class, 'store'])->name('recipe.store');

// Mengakses gambar private menggunakan filename
Route::get('/recipe/image/{filename}', [RecipeController::class, 'getImage'])->name('recipe.image');

// Halaman dashboard hanya bisa diakses oleh pengguna yang terautentikasi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Autentikasi untuk halaman profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
