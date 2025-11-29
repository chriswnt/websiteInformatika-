@extends('layout.layout_admin.layout_1')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Mahasiswa</h1>

  {{-- tombol tambah --}}
  <a href="{{ url('/mahasiswa/tambah') }}" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg me-1" viewBox="0 0 16 16">
      <path d="M8 1a.5.5 0 0 1 .5.5V7h5.5a.5.5 0 0 1 0 1H8.5v5.5a.5.5 0 0 1-1 0V8H2a.5.5 0 0 1 0-1h5.5V1.5A.5.5 0 0 1 8 1"/>
    </svg>
    Tambah
  </a>
</div>

@if (session()->has('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Prodi</th>

      {{-- ⭐ Tambahan Baru --}}
      <th>Jenis Kelamin</th>
      <th>Angkatan</th>
      {{-- ⭐ End Tambahan --}}

      <th>Foto</th>
      <th class="text-center">Edit</th>
      <th class="text-center">Hapus</th>
    </tr>
  </thead>

  <tbody>
    @foreach($mahasiswa as $m)
      <tr>
        <td>{{ $m->id }}</td>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->nama }}</td>
        <td>{{ $m->prodi }}</td>

        {{-- ⭐ Data Baru --}}
        <td>{{ $m->jenis_kelamin }}</td>
        <td>{{ $m->angkatan }}</td>
        {{-- ⭐ End --}}

        {{-- FOTO --}}
        <td>
          @if($m->photo)
            <img src="{{ asset('storage/'.$m->photo) }}"
                 style="width:60px; height:60px; object-fit:cover; border-radius:4px;">
          @else
            <span class="text-muted">-</span>
          @endif
        </td>

        {{-- EDIT --}}
        <td class="text-center">
          <a href="{{ url('/mahasiswa/edit/'.$m->id) }}" title="Edit">
            <i class="bi bi-pencil-square"></i>
          </a>
        </td>

        {{-- HAPUS --}}
        <td class="text-center">
          <a href="{{ url('/mahasiswa/hapus/'.$m->id) }}"
             onclick="return confirm('Yakin hapus data ini?')" title="Hapus">
            <i class="bi bi-trash"></i>
          </a>
        </td>

      </tr>
    @endforeach
  </tbody>
</table>
@endsection
