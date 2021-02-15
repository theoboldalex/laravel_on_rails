<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/create', [PostController::class, 'store']);
Route::get('/{id}', [PostController::class, 'show'])->name('single');
Route::post('/delete/{id}', [PostController::class, 'destroy'])->name('delete');
Route::get('/update/{id}', [PostController::class, 'update'])->name('update');
Route::post('/update/{id}', [PostController::class, 'storeUpdate']);