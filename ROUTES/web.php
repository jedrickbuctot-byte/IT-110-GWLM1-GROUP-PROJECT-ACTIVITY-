<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'contact');
Route::view('/contact', 'contact')->name('contact');
