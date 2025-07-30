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
            'username' => 'Adam Panji',
            'email' => 'admin@gmail',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        AuthModel::create([
            'username' => 'Muhammad Wildan',
            'email' => 'admin2@gmail',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
    }
}
