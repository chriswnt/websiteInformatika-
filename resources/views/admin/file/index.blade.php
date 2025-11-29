@extends('layout.layout_admin.layout_1')

@section('content')

<div class="container mt-4">

    <h2 class="mb-4">Upload File ke Database</h2>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Error --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Upload -->
    <div class="card shadow mb-4">
        <div class="card-body">
      <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Pilih File</label>
        <input type="file" name="file" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

        </div>
    </div>

    <!-- List File -->
    <h4 class="mt-4">Daftar File</h4>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama File</th>
                    <th>Preview</th>
                    <th style="width: 180px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($files as $index => $f)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $f->name }}</td>
                        <td>
                            @php $ext = pathinfo($f->path, PATHINFO_EXTENSION); @endphp

                            @if(in_array($ext, ['jpg','jpeg','png']))
                                <img src="{{ asset('storage/'.$f->path) }}" style="max-width:100px;">
                            @elseif($ext == 'pdf')
                                <a href="{{ asset('storage/'.$f->path) }}" target="_blank" class="btn btn-danger btn-sm">
                                    Lihat PDF
                                </a>
                            @else
                                <a href="{{ asset('storage/'.$f->path) }}" target="_blank" class="btn btn-secondary btn-sm">
                                    Download
                                </a>
                            @endif
                        </td>
                       <td>
    {{-- Tombol Edit --}}
    <a href="{{ route('file.edit', $f->id) }}" class="btn btn-warning btn-sm">
        Edit
    </a>

    {{-- Tombol Hapus --}}
    <form action="{{ route('file.destroy', $f->id) }}"
          method="POST"
          class="d-inline"
          onsubmit="return confirm('Yakin hapus file ini?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm">Hapus</button>
    </form>
</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada file</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div> {{-- container --}}

@endsection
