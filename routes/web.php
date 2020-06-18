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
    return view('index');
})->name('home');

Route::middleware('auth')
    ->prefix('panel')
    ->name('panel.')
    ->namespace('Rimorsoft')
    ->domain('blog.rimorsoft.com')
    ->group(function () {

    /**
     * Route::get('posts', 'PostController@index')->name('posts');
     * Route::get('posts/{id}', 'PostController@show')->name('posts.show');
     */

    Route::get('posts', function () {
        return 'todos los posts';
    })->name('posts');

    Route::get('posts/{id}', function ($id) {
        return "post del id $id";
    })->name('posts.show');

});