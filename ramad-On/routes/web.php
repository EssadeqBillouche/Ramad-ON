<?php

use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route for the homepage
Route::get('/', function () {
    return view('index');
});

// Post routes
Route::get('/Posts', [PostController::class, 'index']);
Route::resource('posts', PostController::class);
Route::post('/posts/{id}/comment', [PostController::class, 'storeComment'])->name('posts.storeComment');
// Recipe Routes
Route::resource('recipes', RecipesController::class);
Route::get('recipes', [RecipesController::class, 'index'])->name('recipes.index');
Route::post('recipes', [RecipesController::class, 'store'])->name('recipes.store');
