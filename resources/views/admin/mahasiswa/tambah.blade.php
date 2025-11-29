@extends('layout.layout_admin.layout_1')

@section('content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Mahasiswa</h1>
</div>

<div class="d-grid gap-2 d-md-block mb-3">
    <a href="{{ url('/mahasiswa') }}">
        <button class="btn btn-primary" type="button">Kembali</button>
    </a>
</div>

<form action="{{ url('/mahasiswa/simpan') }}" method="POST">
    @csrf

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="text" name="nim" class="form-control" required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Program Studi</label>
        <div class="col-sm-10">
            <input type="text" name="prodi" class="form-control" required>
        </div>
    </div>

    {{-- ⭐ JENIS KELAMIN --}}
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>

    {{-- ANGKATAN --}}
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Angkatan</label>
        <div class="col-sm-10">
            <input type="number" name="angkatan" class="form-control" required>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
