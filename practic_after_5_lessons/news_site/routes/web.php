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

Route::get('/', MainController::class.'@index')->name('index');
Route::get('/posts', MainController::class.'@postsList')->name('posts.list');
Route::get('/post/create', MainController::class.'@postCreate')->name('post.create');
Route::get('/post/detail/{post}', MainController::class.'@postDetail')->name('post.detail');

Route::post('/post/create', MainController::class.'@postSave')->name('post.save');
Route::post('/post/detail/{post}', MainController::class.'@postComments')->name('post.comments');

