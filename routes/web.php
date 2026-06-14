<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\SiswaController ;
use App\Http\Controllers\KeranjangController ;


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

Route::get('index', function () {
    return view('index');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('Keranjang.index');
Route::get('/keranjang/create', [KeranjangController::class, 'create'])->name('Keranjang.create');
Route::post('/keranjang', [KeranjangController::class, 'store'])->name('Keranjang.store');
Route::get('/keranjang/{id}/edit', [KeranjangController::class, 'edit'])->name('Keranjang.edit');
Route::put('/keranjang/{id}', [KeranjangController::class, 'update'])->name('Keranjang.update');
Route::delete('/keranjang/{nrp}', [KeranjangController::class, 'destroy'])->name('Keranjang.destroy');
