<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo selamat datang </h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('loginpage', function () {
    return view('loginpage');
});

Route::get('latihanresponsive', function () {
    return view('latihanresponsive');
});

Route::get('news', function () {
    return view('news');
});

Route::get('about', function () {
    return view('about');
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);
