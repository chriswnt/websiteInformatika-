<?php

use Illuminate\Support\Facades\Route;

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
