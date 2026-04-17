@extends('layouts.app')

@section('content')
<h1>Edit Makanan</h1>

<form action="{{ route('makanans.update', $makanan->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="nama">Nama Makanan</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $makanan->nama) }}" required>
        @error('nama')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Makanan Berat" {{ old('kategori', $makanan->kategori) == 'Makanan Berat' ? 'selected' : '' }}>Makanan Berat</option>
            <option value="Makanan Ringan" {{ old('kategori', $makanan->kategori) == 'Makanan Ringan' ? 'selected' : '' }}>Makanan Ringan</option>
            <option value="Minuman" {{ old('kategori', $makanan->kategori) == 'Minuman' ? 'selected' : '' }}>Minuman</option>
            <option value="Snack" {{ old('kategori', $makanan->kategori) == 'Snack' ? 'selected' : '' }}>Snack</option>
        </select>
        @error('kategori')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" rows="4" required>{{ old('deskripsi', $makanan->deskripsi) }}</textarea>
        @error('deskripsi')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="harga">Harga (Rp)</label>
        <input type="number" name="harga" id="harga" value="{{ old('harga', $makanan->harga) }}" required>
        @error('harga')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" value="{{ old('stok', $makanan->stok) }}" required>
        @error('stok')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('makanans.index') }}" class="btn btn-danger">Batal</a>
    </div>
</form>
@endsection