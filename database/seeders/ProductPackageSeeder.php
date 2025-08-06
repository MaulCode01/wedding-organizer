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
            ProductPackage::insert([
                [
                    'content_id'    => $weddingContent->id,
                    'nama_paket'    => 'Paket Intimate Wedding',
                    'harga'         => 45000000,
                    'fitur'         => json_encode(['50 Tamu', 'Dekorasi Simple Elegan', 'Foto & Video Dokumentasi']),
                    'image_package' => 'aset/image/wedding-3.jpg',
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ],
                [
                    'content_id'    => $weddingContent->id,
                    'nama_paket'    => 'Paket Elegant Wedding',
                    'harga'         => 85000000,
                    'fitur'         => json_encode(['200 Tamu', 'Entertainment & MC', 'Dekorasi Premium']),
                    'image_package' => 'aset/image/wedding-5.jpg',
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ],
                [
                    'content_id'    => $weddingContent->id,
                    'nama_paket'    => 'Paket Royal Wedding',
                    'harga'         => 150000000,
                    'fitur'         => json_encode(['500 Tamu', 'Venue Mewah', 'Live Streaming + Cinematic']),
                    'image_package' => 'aset/image/wedding-6.jpg',
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ],
            ]);
        }

        $prewedContent = ProdukContentModel::where('kategori', 'Prewed')->first();
        if ($prewedContent) {
            ProductPackage::insert([
                [
                    'content_id'    => $prewedContent->id,
                    'nama_paket'    => 'Prewed Indoor',
                    'harga'         => 5000000,
                    'fitur'         => json_encode(['Studio Indoor', 'Makeup Ringan', '20 Edited Photos']),
                    'image_package' => 'aset/image/prewed-1.jpg',
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ],
            ]);
        }
    }
}
