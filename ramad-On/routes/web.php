<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});


Route::get('/Posts',[PostController::class, 'index']);
Route::resource('posts', PostController::class);
Route::post('/posts/{id}/comment', [PostController::class, 'storeComment'])->name('posts.storeComment');





