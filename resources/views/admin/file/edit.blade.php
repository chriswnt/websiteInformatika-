@extends('layout.layout_admin.layout_1')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit File</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('file.update', $file->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama File (opsional)</label>
                    <input type="text" name="name" class="form-control" value="{{ $file->name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">File Baru (opsional)</label>
                    <input type="file" name="file" class="form-control">
                    <small class="text-muted">
                        Biarkan kosong jika tidak ingin mengganti file.
                    </small>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('file.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
