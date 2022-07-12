<?php

use Illuminate\Support\Facades\Route;

//posts
Route::get('/', [App\Http\Controllers\Controller::class,'checkStatus']);
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);