@extends('layout.layout_admin.layout_1')



@section('content')

<div

            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <h1 class="h2">Dashboard</h1>

</div>
  
<a href="/pegawai/tambah">
    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
</a>

<table class="table table-striped"> 

  <thead>

    <tr>

      <th scope="col">id</th>

      <th scope="col">Nama</th>

      <th scope="col">Alamat</th>

      <th scope="col">Umur</th>

    </tr>

  </thead>

  <tbody>

    @foreach( $pegawai as $p )

    <tr>

      <th scope="row">{{$p-> pegawai_id}}</th>

      <td>{{$p-> pegawai_nama}}</td>

      <td>{{$p-> pegawai_jabatan}}</td>

      <td>{{$p-> pegawai_umur}}</td>

    </tr>

      @endforeach

  </tbody>

</table>

@endsection