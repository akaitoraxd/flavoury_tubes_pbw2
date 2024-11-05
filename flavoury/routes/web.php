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

Route::get('/home', function () {
    return view('home');
});

Route::get('/addrecipe', [RecipeController::class, 'create'])->middleware(['auth', 'verified'])->name('addRecipe');

Route::post('/recipe/store', [RecipeController::class, 'store'])->middleware(['auth', 'verified'])->name('recipe.store');

Route::get('/test', [RecipeController::class, 'showOwnRecipe'])->middleware(['auth', 'verified'])->name('showOwnRecipe');

Route::get('/recipe/{id}', [RecipeController::class, 'show'])->middleware(['auth', 'verified'])->name('recipe.show');

Route::delete('/recipe/{id}', [RecipeController::class, 'destroy'])->middleware(['auth', 'verified'])->name('recipe.destroy');

Route::get('/recipe/{id}/edit', [RecipeController::class, 'edit'])->middleware(['auth', 'verified'])->name('recipe.edit');

Route::patch('/recipe/{id}', [RecipeController::class, 'update'])->middleware(['auth', 'verified'])->name('recipe.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
