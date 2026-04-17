<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::latest()->paginate(10);
        return view('makanans.index', compact('makanans'));
    }

    public function create()
    {
        return view('makanans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:100',
            'deskripsi' => 'required|min:10',
            'harga' => 'required|numeric|min:1000',
            'stok' => 'required|integer|min:0',
            'kategori' => 'required|in:Makanan Berat,Makanan Ringan,Minuman,Snack'
        ]);

        Makanan::create($request->all());

        return redirect()->route('makanans.index')
            ->with('success', 'Makanan berhasil ditambahkan!');
    }

    public function show(Makanan $makanan)
    {
        return view('makanans.show', compact('makanan'));
    }

    public function edit(Makanan $makanan)
    {
        return view('makanans.edit', compact('makanan'));
    }

    public function update(Request $request, Makanan $makanan)
    {
        $request->validate([
            'nama' => 'required|min:3|max:100',
            'deskripsi' => 'required|min:10',
            'harga' => 'required|numeric|min:1000',
            'stok' => 'required|integer|min:0',
            'kategori' => 'required|in:Makanan Berat,Makanan Ringan,Minuman,Snack'
        ]);

        $makanan->update($request->all());

        return redirect()->route('makanans.index')
            ->with('success', 'Makanan berhasil diupdate!');
    }

    public function destroy(Makanan $makanan)
    {
        $makanan->delete();

        return redirect()->route('makanans.index')
            ->with('success', 'Makanan berhasil dihapus!');
    }
}