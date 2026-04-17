@extends('layouts.app')

@section('content')
<h1>Detail Makanan</h1>

<table style="width: 100%; margin-top: 20px;">
    <tr>
        <th style="width: 150px; background: #f7fafc;">Nama</th>
        <td>{{ $makanan->nama }}</td>
    </tr>
    <tr>
        <th style="background: #f7fafc;">Kategori</th>
        <td>{{ $makanan->kategori }}</td>
    </tr>
    <tr>
        <th style="background: #f7fafc;">Deskripsi</th>
        <td>{{ $makanan->deskripsi }}</td>
    </tr>
    <tr>
        <th style="background: #f7fafc;">Harga</th>
        <td>Rp {{ number_format($makanan->harga, 0, ',', '.') }}</td>
    </tr>
    <tr>
        <th style="background: #f7fafc;">Stok</th>
        <td>{{ $makanan->stok }}</td>
    </tr>
    <tr>
        <th style="background: #f7fafc;">Dibuat</th>
        <td>{{ $makanan->created_at->format('d/m/Y H:i') }}</td>
    </tr>
    <tr>
        <th style="background: #f7fafc;">Diupdate</th>
        <td>{{ $makanan->updated_at->format('d/m/Y H:i') }}</td>
    </tr>
</table>

<div style="margin-top: 20px;">
    <a href="{{ route('makanans.edit', $makanan->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('makanans.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection