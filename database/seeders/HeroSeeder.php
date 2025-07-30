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
            'title' => 'Uji coba',
            'subTitle' => 'lorem ipsum sit donor',
            'label' => 'Nikah?'
        ]);

        AboutModel::create([
            'title' => 'Uji coba',
            'subTitle' => 'lorem ipsum sit donor',
            'alamat' => 'Bandung',
            'Kontak' => '1000000'
        ]);
    }
}
