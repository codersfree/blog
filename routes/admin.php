<?php

use App\Http\Controllers\Admin\{CategoryController, HomeController, PostController, RoleController, TagController,UserController};
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

