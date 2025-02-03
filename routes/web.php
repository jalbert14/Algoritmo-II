<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('inicio');

Route::get('/register', function () {
    return view('registro');
})->name('register');

Route::post('/register', function () {
    return view('registro');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');