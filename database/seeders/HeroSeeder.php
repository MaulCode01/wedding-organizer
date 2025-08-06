<?php

namespace Database\Seeders;

use App\Models\client\AboutModel;
use App\Models\client\HeroModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroModel::create([
            'title' => 'Buat Hari Pernikahanmu Tak Terlupakan',
            'subTitle' => 'Wujudkan momen bahagia sekali seumur hidup dengan layanan Wedding Organizer profesional. Kami hadir untuk memastikan setiap detail berjalan sempurna, sehingga Anda dapat menikmati hari istimewa tanpa khawatir.',
            'label' => 'Buatlah Moment Pernikahan lebih Bermakna',
        ]);

        AboutModel::create([
            'title' => 'Kenapa Memilih Kami?',
            'subTitle' => 'Dengan pengalaman bertahun-tahun, kami menghadirkan paket lengkap dari dekorasi, MUA, hingga dokumentasi. Setiap pasangan berhak mendapat momen indah yang direncanakan secara detail dan penuh cinta.',
            'alamat' => 'Jl. Melati No.10, Bandung',
            'kontak' => '+62 812-3456-7890',
        ]);
    }
}
