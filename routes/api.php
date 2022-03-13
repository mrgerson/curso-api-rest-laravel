<?php

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as Postv2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */
//V1
Route::apiResource('v1/posts', PostV1::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

//V2
Route::apiResource('v2/posts', Postv2::class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
