<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat User Admin Utama
        User::factory()->create([
            'name' => 'Ahmad Sofi Sidik',
            'email' => 'sofi.sidik12@gmail.com',
            'id' => 1, // Pastikan ID-nya 1
            'bio' => 'Seorang mahasiswa yang antusias belajar tentang pengembangan web dengan Laravel. Saat ini sedang mencari kesempatan magang untuk menerapkan dan mengembangkan keahlian.',
            'social_media' => json_encode([
                'LinkedIn' => 'https://linkedin.com/in/ahmad-sofi-sidik',
                'GitHub' => 'https://github.com/assidik12',
                'Instagram' => 'https://instagram.com/as.sidik_',
                'Medium' => 'https://medium.com/@sofi.sidik12',
            ]),
            'role' => 'admin',
            'password' => Hash::make('sidik123'), // Ganti dengan password aman
        ]);
        $this->call(ProjectSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(SkillSeeder::class);
    }
}