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

Route::view('/', 'index')->name('home');

/*
Route::get('parameters/{category}/{post}', function ($category, $post) {
    return "parámetros $category $post";
})->name('parameters');
*/

Route::get('posts/{category?}', function ($category = null) {
    return "parámetros $category";
})->name('posts');