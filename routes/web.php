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
    return view('main');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin.main');
});

Route::get('/Dashboard', function () {
    return view('admin.Dashboard');
});

Route::get('/DataFoto', function () {
    return view('admin.DataFoto');
});

Route::get('/TambahDataFoto', function () {
    return view('admin.TambahDataFoto');
});

