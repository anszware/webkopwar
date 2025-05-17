<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
         User::create([
            'username' => 'saepulanwari',
            'email' => 'saepul@admin.com',
            'password' => Hash::make('admin123'),
            'type' => 'warga',
            'role' => 'petugas',
            'email_verified_at' => now(),
        ]);
         User::create([
            'username' => 'saepulanggota',
            'email' => 'saepul@anggota.com',
            'password' => Hash::make('anggota123'),
            'type' => 'warga',
            'role' => 'anggota',
            'email_verified_at' => now(),
        ]);
    }
}
