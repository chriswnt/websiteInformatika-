@extends('layout.layout_admin.layout_1')


@section('content')
<div class="container">
    <h2>Detail Produk</h2>
   
    <div class="card">
        <div class="card-header">
            <h3>{{ $product->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>Harga:</strong> Rp{{ number_format($product->price, 0, ',', '.') }}</p>
            <p><strong>Deskripsi:</strong></p>
            <p>{{ $product->description ?? 'Tidak ada deskripsi.' }}</p>
            <p><strong>Dibuat Pada:</strong> {{ $product->created_at->format('d M Y, H:i') }}</p>
            <p><strong>Diperbarui Pada:</strong> {{ $product->updated_at->format('d M Y, H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('products.index') }}" class="btn btn-info">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection



