<?php

use Illuminate\Support\Facades\Route;

//Route::view('/','landing.index')->name('index');
//Route::view('/about','landing.about')->name('about');

Route::view('/','index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');