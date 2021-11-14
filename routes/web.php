<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.app');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books' , function (){
    return view('books.index');
});

//Route::group(['middleware' => ['auth']] , function (){
//    Route::resource('/users' , \App\Http\Controllers\UserController::class);
//    Route::resource('/roles' , \App\Http\Controllers\UserController::class);
//    Route::resource('/permissions' , \App\Http\Controllers\UserController::class);
//    Route::resource('/books' , \App\Http\Controllers\UserController::class);
//    Route::resource('/authors' , \App\Http\Controllers\UserController::class);
//    Route::resource('/publishers' , \App\Http\Controllers\UserController::class);
//});

Route::resource('/users' , \App\Http\Controllers\UserController::class);
Route::resource('/roles' , \App\Http\Controllers\RoleController::class);
Route::resource('/permissions' , \App\Http\Controllers\PermissionController::class);
Route::resource('/books' , \App\Http\Controllers\BookController::class);
Route::resource('/authors' , \App\Http\Controllers\AuthorController::class);
Route::resource('/publishers' , \App\Http\Controllers\PublisherController::class);

