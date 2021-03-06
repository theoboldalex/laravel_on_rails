<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\UserPostController;

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

Route::post('/{post}/comments', [CommentController::class, 'store'])->name('addComment');
Route::get('/{user}/posts', [UserPostController::class, 'index'])->name('userPosts');

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/create', [PostController::class, 'create'])->name('create')->middleware(['auth']);
Route::post('/create', [PostController::class, 'store'])->middleware(['auth']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('single');
Route::post('/delete/{id}', [PostController::class, 'destroy'])->name('delete')->middleware(['auth']);
Route::get('/update/{id}', [PostController::class, 'edit'])->name('update');
Route::post('/update/{id}', [PostController::class, 'update'])->middleware(['auth']);

Route::group(['prefix' => '/auth'], function() {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
});
