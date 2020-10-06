<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/laravel', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/propouseauth', function() {
    return view('propouseauth');
})->name('propouseauth');


Route::get('/posts/create', [PostController::class, 'create'])
    ->middleware('myauth')
    ->name('create');

Route::post('/posts/create', [PostController::class, 'save'])
    ->name('save');

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');
