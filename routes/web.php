<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::view('/home', 'home');
Route::view('/data-penduduk', 'data');
Route::view('/statistik', 'statistik');
Route::view('/settings', 'settings');