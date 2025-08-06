<?php

namespace Database\Seeders;

use App\Models\product\ProdukContentModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        ProdukContentModel::create([
            'kategori' => 'Wedding',
            'judul_konten' => 'Paket Pernikahan Elegan',
            'deskripsi_konten' => 'Paket wedding lengkap dengan dekorasi, MUA, dan dokumentasi.',
            'fitur' => ['Dekorasi Bunga Premium', 'MUA Profesional', 'Fotografer 2 Orang'],
            'image_konten' => 'wedding.jpg',
        ]);

        ProdukContentModel::create([
            'kategori' => 'Prewed',
            'judul_konten' => 'Paket Prewedding Romantis',
            'deskripsi_konten' => 'Paket foto prewedding di lokasi pilihan Anda.',
            'fitur' => ['Makeup Ringan', '2 Lokasi Foto', 'Album Cetak 20 Halaman'],
            'image_konten' => 'prewed.jpg',
        ]);

        ProdukContentModel::create([
            'kategori' => 'Dekorasi',
            'judul_konten' => 'Dekorasi Mewah',
            'deskripsi_konten' => 'Dekorasi elegan untuk resepsi pernikahan Anda.',
            'fitur' => ['Backdrop Bunga', 'Panggung Pelaminan', 'Lighting Premium'],
            'image_konten' => 'dekorasi.jpg',
        ]);

        ProdukContentModel::create([
            'kategori' => 'MUA',
            'judul_konten' => 'MUA Profesional',
            'deskripsi_konten' => 'Makeup artist terbaik untuk hari istimewa Anda.',
            'fitur' => ['Makeup Pengantin', 'Hairdo Modern', 'Touch Up Selama Acara'],
            'image_konten' => 'mua.jpg',
        ]);

        ProdukContentModel::create([
            'kategori' => 'Dokumentasi',
            'judul_konten' => 'Dokumentasi Lengkap',
            'deskripsi_konten' => 'Abadikan momen berharga Anda dengan dokumentasi profesional.',
            'fitur' => ['Video Cinematic', 'Fotografer 3 Orang', 'Drone Footage'],
            'image_konten' => 'dokumentasi.jpg',
        ]);
    }
}
