@extends('layout.layout_admin.layout_1')


@section('content')
<div class="container">
    <h2>Edit Produk: {{ $product->name }}</h2>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="form-group mb-3">
            <label for="name">Nama Produk:</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ old('name', $product->name) }}" required>
        </div>


        <div class="form-group mb-3">
            <label for="description">Deskripsi:</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
        </div>


        <div class="form-group mb-3">
            <label for="price">Harga (Rp):</label>
            <input type="number" class="form-control" id="price" name="price"
                   value="{{ old('price', $product->price) }}" required min="0">
        </div>


        <button type="submit" class="btn btn-success">Perbarui Produk</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection

