<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/post', function () {
    return view('post');
});

Route::get('/subpost', function () {
    return view('subpost');
});

Route::get('/', function () {
    return view('welcome');
});
