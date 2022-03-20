<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
Route::get('usuarios', [App\Http\Controllers\PostController::class, 'showuser']);
