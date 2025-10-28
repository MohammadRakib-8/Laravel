<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [PostController::class, 'create']);
Route::post('/test', [PostController::class, 'ourTestStorage'])->name('test');
