<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/{category?}', [PostController::class, 'index'])->name('index');