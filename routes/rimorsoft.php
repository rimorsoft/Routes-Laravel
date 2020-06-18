<?php

use Illuminate\Support\Facades\Route;

Route::view('nuevo-acerca-de', 'about', [
    'company' => 'Rimorsoft...'
])->name('about');