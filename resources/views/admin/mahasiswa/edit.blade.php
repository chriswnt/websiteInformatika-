@extends('layout.layout_admin.layout_1')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Data Mahasiswa</h1>
  <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Kembali</a>
</div>

{{-- TAMPILKAN ERROR VALIDASI --}}
@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $e)
        <li>{{ $e }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')  {{-- karena di route pakai PUT --}}

  {{-- NIM --}}
  <div class="row mb-3">
    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nim" name="nim"
             value="{{ old('nim', $mahasiswa->nim) }}" required>
    </div>
  </div>

  {{-- NAMA --}}
  <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama"
             value="{{ old('nama', $mahasiswa->nama) }}" required>
    </div>
  </div>

  {{-- PRODI --}}
  <div class="row mb-3">
    <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="prodi" name="prodi"
             value="{{ old('prodi', $mahasiswa->prodi) }}" required>
    </div>
  </div>

  {{-- JENIS KELAMIN --}}
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
        <select name="jenis_kelamin" class="form-control" required>
            <option value="Laki-Laki" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="Perempuan" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
  </div>

  {{-- ANGKATAN ⭐ --}}
  <div class="row mb-3">
    <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="angkatan" name="angkatan"
             value="{{ old('angkatan', $mahasiswa->angkatan) }}" required>
    </div>
  </div>

  {{-- FOTO --}}
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="photo">

      @if($mahasiswa->photo)
        <img src="{{ asset('storage/'.$mahasiswa->photo) }}" width="80" class="mt-2 rounded">
      @endif
    </div>
  </div>

  <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
