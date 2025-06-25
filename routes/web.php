<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::resource('/', 'PostController');
// Route::resource(name:'/post', controller:'PostController');

Route::get('/', [PostController::class, 'index']);
Route::get('post/', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create'); 
Route::get('post/show/{id}', [PostController::class, 'show'])->name('post.show'); 
Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit'); 
Route::post('post/', [PostController::class, 'store'])->name('post.store'); // новая запись нашей базы данных
Route::patch('post/show/{id}', [PostController::class, 'update'])->name('post.update'); 
Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.destroy');  