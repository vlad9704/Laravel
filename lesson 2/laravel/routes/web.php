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
Route::get('/about', MainController::class.'@about')->name('about');
Route::get('/contact', MainController::class.'@contact')->name('contact');
Route::get('/blog', MainController::class.'@blog')->name('blog');

Route::get('/extends', function () {
    return view('extends');
});

