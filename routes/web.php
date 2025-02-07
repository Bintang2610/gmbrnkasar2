<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/upload', [UploadController::class, 'showForm']);
Route::post('/upload', [UploadController::class, 'uploadImage'])->name('upload.image');

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
Route::get('/list-employee', function () {
    return view('employee');
});
Route::get('/profil-employee', function () {
    return view('employeebio');
});
Route::get('/edit-employee', function () {
    return view('editemployee');
});
Route::get('/add-employee', function () {
    return view('addemployee');
});