<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basic', 'App\Http\Controllers\BasicExampleController@show');