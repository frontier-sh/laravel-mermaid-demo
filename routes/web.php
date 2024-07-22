<?php

use App\Livewire\UsersDemo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basic', 'App\Http\Controllers\BasicExampleController@show');

Route::get('/from-user-model', 'App\Http\Controllers\UserController@show');

Route::get('/livewire-users', UsersDemo::class);