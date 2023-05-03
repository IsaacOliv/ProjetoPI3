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




Route::controller(UsersController::class)->group(function (){
    Route::get('/login', 'login')->name('users.login');
    Route::get('/register', 'register')->name('users.register');
    Route::post('/register','store')->name('users.store');

});

Route::controller(PostsController::class)->prefix('post')->group(function (){
    Route::get('/', 'index')->name('posts.index');
    Route::get('/create', 'create')->name('posts.create');
    Route::post('/create', 'store')->name('posts.store');
    Route::get('/edit/{id}','edit')->name('posts.edit');
    Route::PUT('/edit/{id}','update')->name('posts.update');
    Route::delete('/destroy/{id}', 'delete')->name('posts.delete');
});



