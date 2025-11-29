<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AuthController;

Route::get('/', fn () => redirect()->route('beranda'));

Route::view('/beranda', 'beranda.beranda')->name('beranda');
Route::view('/profil', 'profil.profil')->name('profil');
Route::view('/pendidikan', 'pendidikan.pendidikan')->name('pendidikan');
Route::view('/riset', 'riset.riset')->name('riset');
Route::view('/mahasiswa', 'mahasiswa.mhs')->name('mahasiswa');
Route::view('/lain-lain', 'lain_lain.lain_lain')->name('lainlain');

Route::get('/search', function (Request $request) {
    return 'You searched: ' . e($request->q);
});

// optional: direct /admin ke index mahasiswa
Route::get('/admin', fn () => redirect()->route('admin.mahasiswa.index'));


// === Pegawai ===
Route::prefix('pegawai')->group(function () {
    Route::get('/',           [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/tambah',     [PegawaiController::class, 'tambah'])->name('pegawai.tambah');
    Route::post('/simpan',    [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/edit/{id}',  [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::post('/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::get('/hapus/{id}', [PegawaiController::class, 'hapus'])->name('pegawai.hapus');
    Route::post('/cari',      [PegawaiController::class, 'pencarian'])->name('pegawai.cari');
});


// === ADMIN MAHASISWA ===
Route::prefix('admin/mahasiswa')->group(function () {
    Route::get('/',            [MahasiswaController::class, 'index'])->name('admin.mahasiswa.index');
    Route::get('/tambah',      [MahasiswaController::class, 'tambah'])->name('admin.mahasiswa.tambah');
    Route::post('/simpan',     [MahasiswaController::class, 'store'])->name('admin.mahasiswa.store');
    Route::get('/edit/{id}',   [MahasiswaController::class, 'edit'])->name('admin.mahasiswa.edit');
    Route::put('/update/{id}', [MahasiswaController::class, 'update'])->name('admin.mahasiswa.update');
    Route::get('/hapus/{id}',  [MahasiswaController::class, 'hapus'])->name('admin.mahasiswa.hapus');
});




// === Auth ===
Route::get('/daftar', [AuthController::class, 'registrationForm']);
Route::post('/daftar', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);


// === FILE ===
Route::get('/file', [FileController::class, 'index'])->name('file.index');
Route::post('/file', [FileController::class, 'store'])->name('file.store');
Route::get('/file/{id}/edit', [FileController::class, 'edit'])->name('file.edit');
Route::put('/file/{id}', [FileController::class, 'update'])->name('file.update');
Route::delete('/file/{id}', [FileController::class, 'destroy'])->name('file.destroy');
