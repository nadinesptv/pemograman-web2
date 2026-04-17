@extends('layouts.app')

@section('content')
<h1>Tambah Makanan</h1>

<form action="{{ route('makanans.store') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label>Nama Makanan:</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required>
        @error('nama') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <label>Kategori:</label>
        <select name="kategori" required>
            <option value="">Pilih</option>
            <option value="Makanan Berat">Makanan Berat</option>
            <option value="Makanan Ringan">Makanan Ringan</option>
            <option value="Minuman">Minuman</option>
            <option value="Snack">Snack</option>
        </select>
        @error('kategori') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <label>Deskripsi:</label>
        <textarea name="deskripsi" rows="4" required>{{ old('deskripsi') }}</textarea>
        @error('deskripsi') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <label>Harga:</label>
        <input type="number" name="harga" value="{{ old('harga') }}" required>
        @error('harga') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <label>Stok:</label>
        <input type="number" name="stok" value="{{ old('stok') }}" required>
        @error('stok') <div class="error">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('makanans.index') }}" class="btn btn-danger">Batal</a>
</form>
@endsection