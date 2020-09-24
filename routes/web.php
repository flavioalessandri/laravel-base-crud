<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pagante');
// });

Route::get('/', 'PaganteController@index')->name('index');
