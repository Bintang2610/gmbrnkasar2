<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/hrd', function () {
    return view('hrd');
});
Route::get('/finance', function () {
    return view('finance');
});
Route::get('/store-reguler', function () {
    return view('storereg');
});
Route::get('/store-mitra', function () {
    return view('storemit');
});
