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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lesson_1', function () {
    $name = request('name');
    $surname = request('surname');
    return view('lesson_1', compact('name','surname'));
});

//Route::get('/posts/{id}', 'PostController@show'); variant one
Route::get('/posts/{id}', PostController::class.'@show');



