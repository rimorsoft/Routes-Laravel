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
Route::get('post/{slug}', function ($slug) {
    return $slug;
})
->where('slug', '[A-Za-z-]+') //[0-9]+
->name('post');
*/

Route::get('post/{id}', function ($id) {
    return $id;
})->name('post');