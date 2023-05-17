<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TrashedPostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/posts', [PostController::class, 'store']);
// Route::get('/posts', [PostController::class, 'create']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::resource('/posts', PostController::class);



//require __DIR__.'/auth.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
