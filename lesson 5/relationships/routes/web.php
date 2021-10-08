<?php

namespace App\Http\Controllers;

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

Route::get('/', MainController::class.'@index')->name('post.index');
Route::get('/post/{id}', MainController::class.'@show')->name('post.show');
Route::get('/posts', MainController::class.'@create')->name('post.create');
Route::get('/posts/{id}', MainController::class.'@edit')->name('post.edit');

Route::post('/posts', MainController::class.'@store')->name('post.store');
Route::put('/posts/{id}', MainController::class.'@update')->name('post.update');
Route::delete('/posts/{id}', MainController::class.'@destroy')->name('post.destroy');
