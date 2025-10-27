<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PostController;
=======
>>>>>>> 89ddedadc23e743ff53aa5e4e0071da674c9d21a

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD


Route::get('/create', [PostController::class, 'create']);
Route::post('/test', [PostController::class, 'ourTestStorage'])->name('test');
=======
Route::get('/test', function () {
    return view('test');
});
>>>>>>> 89ddedadc23e743ff53aa5e4e0071da674c9d21a
