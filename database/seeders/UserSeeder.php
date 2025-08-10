<?php

namespace Database\Seeders;

use App\Models\auth\AuthModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AuthModel::create([
            'nama_lengkap' => 'Adam Panji',
            'email' => 'admin@gmail',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'about_me' => null,
            'kontak' => null,
            'alamat' => null,
        ]);

        AuthModel::create([
            'nama_lengkap' => 'Muhammad Wildan',
            'email' => 'admin2@gmail',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'about_me' => null,
            'kontak' => null,
            'alamat' => null
        ]);


        AuthModel::create([
            'nama_lengkap' => 'Ajis Maulana',
            'email' => 'azis@gmail',
            'password' => Hash::make('password'),
            'role' => 'client',
            'about_me' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'kontak' => '6285848783672',
            'alamat' => 'Jl. Baladewa Utara, Bandung',
        ]);

        AuthModel::create([
            'nama_lengkap' => 'Muhammad Khoppid',
            'email' => 'khopid@gmail',
            'password' => Hash::make('password'),
            'role' => 'client',
            'about_me' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'kontak' => '62857487833435',
            'alamat' => 'Jl. Margacinta, Bandung',
        ]);
    }
}
