@extends('layout.layout_admin.layout_1')

@section('content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Pegawai</h1>
</div>

<div class="d-grid gap-2 d-md-block mb-3">
    <a href="{{ url('/pegawai') }}">
        <button class="btn btn-primary" type="button">Kembali</button>
    </a>
</div>

{{-- PENTING: enctype untuk upload file --}}
<form action="{{ url('/pegawai/simpan') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama Pegawai</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama"
                   placeholder="Masukkan Nama Pegawai" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jabatan" name="jabatan"
                   placeholder="Masukkan Jabatan" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="umur" name="umur"
                   placeholder="Masukkan Umur" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="alamat" name="alamat"
                      placeholder="Masukkan Alamat" rows="3" required></textarea>
        </div>
    </div>

    {{-- ⭐ UPLOAD FOTO --}}
    <div class="row mb-3">
        <label for="photo" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
        </div>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
