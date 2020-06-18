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

// post = id = 1
Route::get('posts/{post}', function (App\Post $post) {
    // $post = App\Post::find($id);

    return $post->slug;
});

// post = slug
Route::get('posts/{post:slug}', function (App\Post $post) {
    return $post->id;
});

//ERROR 404
Route::fallback(function () {
    // return 'método fallback';

    return view('errors.404');
});