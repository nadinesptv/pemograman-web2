@extends('layouts.app')

@section('content')
<div class="header-actions">
    <h1>Daftar Makanan</h1>
    <a href="{{ route('makanans.create') }}" class="btn btn-primary">Tambah Makanan</a>
</div>

@if($makanans->count() > 0)
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($makanans as $key => $makanan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $makanan->nama }}</td>
            <td>{{ $makanan->kategori }}</td>
            <td>Rp {{ number_format($makanan->harga, 0, ',', '.') }}</td>
            <td>{{ $makanan->stok }}</td>
            <td>
                <a href="{{ route('makanans.show', $makanan->id) }}" class="btn btn-info">Detail</a>
                <a href="{{ route('makanans.edit', $makanan->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('makanans.destroy', $makanan->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top: 20px;">
    {{ $makanans->links() }}
</div>
@else
<p>Belum ada data makanan.</p>
@endif
@endsection