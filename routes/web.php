<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
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


Route::get('/login', [UsersController::class, 'login'])->name('users.login');
Route::get('/register',[UsersController::class, 'register'])->name('users.register');
Route::post('/register',[UsersController::class, 'store'])->name('users.store');

Route::controller(UsersController::class)->group(function (){
    Route::get('/', 'index')->name('users.index');

});
Route::controller(PostsController::class)->prefix('post')->group(function (){
    Route::get('/create', 'create')->name('posts.create');
    Route::post('/create', 'store')->name('posts.store');
});



