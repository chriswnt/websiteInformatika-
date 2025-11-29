@extends('layout.layout_admin.layout_1')

@section('content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Pegawai</h1>
</div>

<div class="d-grid gap-2 d-md-block mb-3">
    <a href="{{ url('/pegawai') }}">
        <button class="btn btn-primary" type="button">Kembali</button>
    </a>
</div>

{{-- tampilkan error kalau ada --}}
@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $e)
        <li>{{ $e }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ url('/pegawai/update/'.$pegawai->pegawai_id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama Pegawai</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama"
                   value="{{ old('nama', $pegawai->pegawai_nama) }}" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jabatan" name="jabatan"
                   value="{{ old('jabatan', $pegawai->pegawai_jabatan) }}" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="umur" name="umur"
                   value="{{ old('umur', $pegawai->pegawai_umur) }}" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat"
                   value="{{ old('alamat', $pegawai->pegawai_alamat) }}" required>
        </div>
    </div>

    {{-- ⭐ FOTO --}}
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="photo" accept="image/*">
            @if (!empty($pegawai->photo))
                <img src="{{ asset('storage/'.$pegawai->photo) }}" width="80" class="mt-2 rounded">
            @endif
        </div>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
