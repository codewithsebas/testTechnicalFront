<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/service-1', 'service-1')->name('service-1');
Route::view('/service-2', 'service-2')->name('service-2');
Route::view('/service-3', 'service-3')->name('service-3');
Route::view('/service-4', 'service-4')->name('service-4');
Route::view('/videos', 'videos')->name('service-4');
