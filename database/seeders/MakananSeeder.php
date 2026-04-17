<?php

namespace Database\Seeders;

use App\Models\Makanan;
use Illuminate\Database\Seeder;

class MakananSeeder extends Seeder
{
    public function run(): void
    {
        $makanans = [
            [
                'nama' => 'Nasi Goreng Spesial',
                'deskripsi' => 'Nasi goreng dengan topping ayam, udang, dan telur',
                'harga' => 25000,
                'stok' => 50,
                'kategori' => 'Makanan Berat',
            ],
            [
                'nama' => 'Mie Ayam Bakso',
                'deskripsi' => 'Mie ayam dengan bakso sapi dan pangsit',
                'harga' => 20000,
                'stok' => 40,
                'kategori' => 'Makanan Berat',
            ],
            [
                'nama' => 'Es Teh Manis',
                'deskripsi' => 'Es teh dengan gula aren',
                'harga' => 5000,
                'stok' => 100,
                'kategori' => 'Minuman',
            ],
            [
                'nama' => 'Pisang Goreng',
                'deskripsi' => 'Pisang goreng crispy dengan topping keju',
                'harga' => 15000,
                'stok' => 30,
                'kategori' => 'Snack',
            ],
            [
                'nama' => 'Kentang Goreng',
                'deskripsi' => 'Kentang goreng dengan bumbu spesial',
                'harga' => 12000,
                'stok' => 60,
                'kategori' => 'Makanan Ringan',
            ],
        ];

        foreach ($makanans as $makanan) {
            Makanan::create($makanan);
        }
    }
}