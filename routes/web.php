<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome',['posts'=>post::all()]);
})->name('home');

Route::get('/create', [PostController::class, 'create']);
Route::post('/test', [PostController::class, 'ourTestStorage'])->name('test');


Route::get('/edit/{id}', [PostController::class, 'editData'])->name('edit');

Route::post('update/{id}',[PostController::class,'updateData'])->name('update');