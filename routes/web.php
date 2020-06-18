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

/**
 * 302: movido temporalmente
 * 301: movido permanente
 */
//Route::redirect('tdd', 'tdd-en-laravel', 301);
Route::permanentRedirect('tdd', 'tdd-en-laravel');

Route::get('tdd-en-laravel', function () {
    return 'eBook TDD en Laravel';
});
