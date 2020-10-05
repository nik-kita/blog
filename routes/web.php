<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/propouseauth', function() {
    return view('propouseauth');
})->name('propouseauth');

use App\Http\Controllers\PostController;
Route::get('/create', [PostController::class, 'create'])
    ->middleware('myauth')->name('create');

Route::post('/create', [PostController::class, 'save'])->name('save');

Route::get('/home', [HomeController::class, 'index'])
    ->name('home.index');
