<?php

use App\Controllers\PostsController;
use App\Route;
use App\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index']);
Route::get('/us', [PublicController::class, 'us']);
Route::get('/tech', [PublicController::class, 'tech']);
Route::get('/form', [PublicController::class, 'form']);
Route::post('/answer', [PublicController::class, 'answer']);
Route::get('/admin/posts', [PostsController::class, 'index']);
Route::get('/admin/posts/create', [PostsController::class, 'create']);
Route::get('/admin/posts', [PostsController::class, 'store']);

