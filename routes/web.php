<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', fn() => redirect('/beranda'));

Route::view('/beranda', 'Beranda.beranda')->name('beranda');
Route::view('/profil', 'profil.profil')->name('profil');
Route::view('/pendidikan', 'pendidikan.pendidikan')->name('pendidikan');
Route::view('/riset', 'riset.riset')->name('riset');
Route::view('/mahasiswa', 'mahasiswa.mhs')->name('mahasiswa');
Route::view('/lain-lain', 'lain_lain.lain_lain')->name('lainlain');
use Illuminate\Http\Request;

Route::get('/search', function (Request $request) {
    return 'You searched: ' . e($request->q);
});
Route::view('/lain-lain', 'lain_lain.lain_lain')->name('lainlain');
//admin
Route::get('/admin', function () {
    return view('admin.mahasiswa.index');
    
});

//pegawai

//index
Route::get('/pegawai', [PegawaiController::class, 'index']);

//tambah
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
//simpan
//update
//hapus