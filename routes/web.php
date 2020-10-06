<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentsController;

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
    ->middleware('mysavepost')
    ->name('save');

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::get('/show', [PostController::class, 'show'])->name('show');

Route::get('/post/random', [SearchController::class, 'random'])->name('random');
Route::get('/post/{id}', [PostController::class, 'singleShow'])->name('single_show');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/post/{id}/comment/add', [CommentsController::class, 'addComment'])
    ->middleware('myauth')
    ->name('addComment');

Route::post('/comment/save', [CommentsController::class, 'saveComment'])->name('saveComment');
