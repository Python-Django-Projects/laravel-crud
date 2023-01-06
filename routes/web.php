<?php

use Illuminate\Support\Facades\Route;

Route::resource('posts', \App\Http\Controllers\PostController::class);
//Route::get('delete/{id}', [\App\Http\Controllers\PostController::class, 'destroy']);
//Route::get('edit/{id}', [\App\Http\Controllers\PostController::class, 'edit']);
//Route::post('edit', [\App\Http\Controllers\PostController::class, 'update']);
