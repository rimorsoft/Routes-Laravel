<?php

use Illuminate\Support\Facades\Route;

Route::get('acerca-de', function () {
    return view('about');
});