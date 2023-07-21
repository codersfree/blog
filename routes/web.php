<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PostController::class,'index'])->name('posts.index');

Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class,'category'])->name('post.category');

Route::get('tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
