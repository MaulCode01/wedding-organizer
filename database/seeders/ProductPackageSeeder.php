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
        public function run()
    {
        $categories = [
            'Wedding' => [
                [
                    'image_package' => null,
                    'nama_paket'    => 'Paket Elegant Wedding',
                    'harga'         => 85000000,
                    'fitur_1'       => ['200 Tamu', 'Entertainment & MC', 'Dekorasi Premium'],
                    'fitur_2'       => ['Catering Buffet', 'Live Music', 'Photobooth'],
                    'description'   => 'Paket pernikahan elegan dengan dekorasi premium dan hiburan lengkap.'
                ],
                [
                    'image_package' => null,
                    'nama_paket'    => 'Paket Royal Wedding',
                    'harga'         => 150000000,
                    'fitur_1'       => ['500 Tamu', 'Venue Mewah', 'Live Streaming + Cinematic'],
                    'fitur_2'       => ['Full Catering', 'Dekorasi Bunga Asli', 'Lighting Profesional'],
                    'description'   => 'Paket eksklusif untuk pernikahan mewah dan megah.'
                ],
            ],
            'Prewed' => [
                [
                    'image_package' => null,
                    'nama_paket'    => 'Prewed Indoor',
                    'harga'         => 5000000,
                    'fitur_1'       => ['Studio Indoor', 'Makeup Ringan', '20 Edited Photos'],
                    'fitur_2'       => ['2 Jam Pemotretan', 'Konsultasi Wardrobe', 'Cetak Album Mini'],
                    'description'   => 'Pemotretan prewed indoor dengan konsep elegan.'
                ],
                [
                    'image_package' => null,
                    'nama_paket'    => 'Prewed Outdoor',
                    'harga'         => 8000000,
                    'fitur_1'       => ['Lokasi Outdoor', 'Makeup & Hairdo', '30 Edited Photos'],
                    'fitur_2'       => ['Transportasi Tim', 'Drone Footage', 'Album Eksklusif'],
                    'description'   => 'Pemotretan prewed outdoor dengan pemandangan indah.'
                ],
            ],
            'Dekorasi' => [
                [
                    'image_package' => null,
                    'nama_paket'    => 'Dekorasi Simple',
                    'harga'         => 10000000,
                    'fitur_1'       => ['Backdrop Minimalis', 'Meja Tamu', 'Panggung'],
                    'fitur_2'       => ['Penerangan Dasar', 'Karpet Merah', 'Standing Flower'],
                    'description'   => 'Dekorasi minimalis cocok untuk acara kecil.'
                ],
                [
                    'image_package' => null,
                    'nama_paket'    => 'Dekorasi Premium',
                    'harga'         => 30000000,
                    'fitur_1'       => ['Backdrop Premium', 'Lampu Sorot', 'Full Bunga Segar'],
                    'fitur_2'       => ['Karpet VIP', 'Hiasan Meja', 'Gate Entrance'],
                    'description'   => 'Dekorasi premium dengan detail bunga segar.'
                ],
            ],
            'MUA' => [
                [
                    'image_package' => null,
                    'nama_paket'    => 'Makeup Pengantin',
                    'harga'         => 7000000,
                    'fitur_1'       => ['Makeup Full', 'Hairdo', 'Aksesoris'],
                    'fitur_2'       => ['Retouch Selama Acara', 'Konsultasi Gaya', 'Lensa Kontak'],
                    'description'   => 'Layanan makeup profesional untuk pengantin.'
                ],
            ],
            'Dokumentasi' => [
                [
                    'image_package' => null,
                    'nama_paket'    => 'Foto & Video Wedding',
                    'harga'         => 15000000,
                    'fitur_1'       => ['Fotografer 2 Orang', 'Videografer 2 Orang', 'Drone Footage'],
                    'fitur_2'       => ['Album Foto Cetak', 'Video Highlight', 'Video Cinematic'],
                    'description'   => 'Layanan dokumentasi lengkap untuk pernikahan.'
                ],
            ],
        ];

        foreach ($categories as $kategori => $paketList) {
            $content = ProdukContentModel::where('kategori', $kategori)->first();
            if ($content) {
                foreach ($paketList as $index => $data) {
                    ProductPackage::create([
                        'content_id'          => $content->id,
                        'image_package'       => $data['image_package'],
                        'nama_paket'          => $data['nama_paket'],
                        'package_key'         => strtolower($kategori) . '-' . ($index + 1),
                        'harga'               => $data['harga'],
                        'fitur_1'             => $data['fitur_1'],
                        'fitur_2'             => $data['fitur_2'],
                        'description_content' => $data['description'],
                        'created_at'          => now(),
                        'updated_at'          => now(),
                    ]);
                }
            }
        }
    }

}
