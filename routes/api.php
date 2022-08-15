<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// testcontroller

Route::get('/index', [TestController::class, 'index']);
Route::get('/edit/{id}/color/{id2}', [TestController::class, 'edit']);

// posts
Route::get('/post/{id}/',[PostController::class, 'singlePost'])->where('id', '[0-9]');
Route::get('/post/{id}/{color}',[PostController::class, 'doubleParameter'] );
Route::get('/posts', [PostController::class, 'allPost']);

// products
Route::get('/products', [ProductController::class, 'index']);
Route::get('/hello', [ProductController::class, 'helloWorld']);
Route::get('/search', [ProductController::class, 'search']);


