<?php

namespace Database\Seeders;

use App\Models\product\ProductPackage;
use App\Models\product\ProdukContentModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weddingContent = ProdukContentModel::where('kategori', 'Wedding')->first();
        if ($weddingContent) {
            $packages = [
                [
                    'nama_paket'    => 'Paket Intimate Wedding',
                    'harga'         => 45000000,
                    'fitur'         => ['50 Tamu', 'Dekorasi Simple Elegan', 'Foto & Video Dokumentasi'],
                    'image_package' => 'aset/image/wedding-3.jpg',
                ],
                [
                    'nama_paket'    => 'Paket Elegant Wedding',
                    'harga'         => 85000000,
                    'fitur'         => ['200 Tamu', 'Entertainment & MC', 'Dekorasi Premium'],
                    'image_package' => 'aset/image/wedding-5.jpg',
                ],
                [
                    'nama_paket'    => 'Paket Royal Wedding',
                    'harga'         => 150000000,
                    'fitur'         => ['500 Tamu', 'Venue Mewah', 'Live Streaming + Cinematic'],
                    'image_package' => 'aset/image/wedding-6.jpg',
                ],
            ];

            foreach ($packages as $index => $data) {
                ProductPackage::create([
                    'content_id'    => $weddingContent->id,
                    'nama_paket'    => $data['nama_paket'],
                    'package_key'   => strtolower($weddingContent->kategori) . '-' . ($index + 1),
                    'harga'         => $data['harga'],
                    'fitur'         => json_encode($data['fitur']),
                    'image_package' => $data['image_package'],
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]);
            }
        }

        $prewedContent = ProdukContentModel::where('kategori', 'Prewed')->first();
        if ($prewedContent) {
            ProductPackage::create([
                'content_id'    => $prewedContent->id,
                'nama_paket'    => 'Prewed Indoor',
                'package_key'   => strtolower($prewedContent->kategori) . '-1',
                'harga'         => 5000000,
                'fitur'         => json_encode(['Studio Indoor', 'Makeup Ringan', '20 Edited Photos']),
                'image_package' => 'aset/image/prewed-1.jpg',
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }

    }
}
