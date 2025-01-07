<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/ownProfile', function () {
    return view('ownProfile');
});

Route::get('/recipe', function () {
    return view('recipe');
});


Route::get('/showRecipe/{id}', [RecipeController::class, 'showRecipes'])->name('showRecipe')->middleware(['auth', 'verified']);
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store')->middleware(['auth', 'verified']);
Route::post('/showRecipe', [CollectionController::class, 'store'])->name('collections.store');
Route::delete('/showRecipe/{id}', [CollectionController::class, 'destroy'])->name('collections.destroy');

Route::get('/pencarian', function () {
    // max 2
    $pencarian = DB::table('recipes')->latest();

    if (request('search')) {
        $pencarian->where('name_recipe', 'like', '%' . request('search') . '%');
    } else {
        $pencarian = DB::table('recipes')->latest()->take(10);
    }


    $pencarian = $pencarian->get();

    return view('pencarian', compact('pencarian'));
})->middleware(['auth', 'verified'])->name('pencarian');


Route::get('/home', [RecipeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/recipe', [RecipeController::class, 'allRecipe'])->middleware(['auth', 'verified'])->name('recipe');

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/addrecipe', [RecipeController::class, 'create'])->middleware(['auth', 'verified'])->name('addRecipe');
Route::post('/recipe/store', [RecipeController::class, 'store'])->middleware(['auth', 'verified'])->name('recipe.store');

Route::get('/ownProfile', [RecipeController::class, 'showOwnRecipe'])->middleware(['auth', 'verified'])->name('showOwnRecipe');
Route::get('/ownRecipe/{id}', [RecipeController::class, 'show'])->middleware(['auth', 'verified'])->name('recipe.show');
Route::delete('/recipe/{id}', [RecipeController::class, 'destroy'])->middleware(['auth', 'verified'])->name('recipe.destroy');
Route::get('/recipe/{id}/edit', [RecipeController::class, 'edit'])->middleware(['auth', 'verified'])->name('recipe.edit');
Route::patch('/recipe/{id}', [RecipeController::class, 'update'])->middleware(['auth', 'verified'])->name('recipe.update');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('market', function () {
    return view('market');
})->name('market');
Route::get('/market', [MarketplaceController::class, 'indexMarket'])->name('marketplace.index');

Route::get('/addItem', function () {
    return view('addItem');
});

Route::get('/addItem', [MarketplaceController::class, 'create'])->name('items.create');
Route::post('/items', [MarketplaceController::class, 'store'])->name('items.store');

Route::get('product', function () {
    return view('product');
});

Route::get('/adminMarket', [MarketplaceController::class, 'index'])->name('adminMarket');

Route::get('/admin/items/create', [MarketplaceController::class, 'create'])->name('admin.items.create');
Route::post('/admin/items', [MarketplaceController::class, 'store'])->name('admin.items.store');

Route::get('/admin/items/{item}/edit', [MarketplaceController::class, 'edit'])->name('items.edit');

Route::patch('/admin/items/{item}', [MarketplaceController::class, 'update'])->name('admin.items.update');
Route::put('/admin/items/{item}', [MarketplaceController::class, 'update'])->name('admin.items.updates');

Route::delete('/admin/items/{item}', [MarketplaceController::class, 'destroy'])->name('items.destroy');

Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/add', [CartController::class, 'add'])->name('add');
    Route::patch('/{id}/update', [CartController::class, 'update'])->name('update');
    Route::delete('/{id}/remove', [CartController::class, 'remove'])->name('remove');
});

Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('invoice/{id}', [OrderController::class, 'invoice']);

Route::get('/admin/ListFeedback', [FeedbackController::class, 'index'])->name('admin.ListFeedback');
Route::get('/admin/ListOrder', [OrderController::class, 'index'])->name('admin.ListOrders');

require __DIR__ . '/auth.php';
