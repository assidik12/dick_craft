<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Project;
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
        // 1. Buat User Admin Utama
        User::factory()->create([
            'name' => 'Ahmad Sofi Sidik',
            'email' => 'sofi.sidik12@gmail.com',
            'id' => 1, // Pastikan ID-nya 1
            'bio' => 'Seorang mahasiswa yang antusias belajar tentang pengembangan web dengan Laravel. Saat ini sedang mencari kesempatan magang untuk menerapkan dan mengembangkan keahlian.',
            'skills' => json_encode(['Laravel', 'Livewire', 'Filament', 'PHP', 'MySQL']),
            'social_media' => json_encode([
                'LinkedIn' => 'https://linkedin.com/in/ahmad-sofi-sidik',
                'GitHub' => 'https://github.com/assidik12',
            ]),
            'password' => Hash::make('password'), // Ganti dengan password aman
        ]);


        // 3. Buat 4 Contoh Proyek
        Project::factory()->create([
            'title' => 'Sistem Manajemen Inventaris',
            'description' => 'Aplikasi web untuk melacak stok barang di gudang, dibangun dengan Laravel dan Filament untuk dasbor admin.',
            'category' => 'Web App',
            'link' => 'https://github.com/username/project1',
        ]);

        Project::factory()->create([
            'title' => 'Website Company Profile',
            'description' => 'Membuat website profil perusahaan yang modern dan responsif menggunakan Laravel dan Livewire untuk form kontak dinamis.',
            'category' => 'Web App',
            'link' => 'https://github.com/username/project2',
        ]);

        Project::factory()->create([
            'title' => 'Aplikasi Voting Online',
            'description' => 'Sebuah platform sederhana untuk melakukan voting secara real-time. Fitur update hasil voting tanpa refresh halaman dibuat menggunakan Livewire.',
            'category' => 'Web App',
            'link' => 'https://github.com/username/project3',
        ]);

        Project::factory()->create([
            'title' => 'Blog Pribadi',
            'description' => 'Proyek blog pribadi untuk sharing artikel teknologi. Dibangun dari nol dengan Laravel dan dasbor adminnya menggunakan Filament.',
            'category' => 'Web App',
            'link' => 'https://github.com/username/project4',
        ]);


        // 4. Buat 2 Contoh Tulisan Blog
        Post::factory()->create([
            'title' => 'Perjalanan Saya Mempelajari Laravel Filament',
            'slug' => 'perjalanan-saya-mempelajari-laravel-filament',
            'content' => 'Ini adalah cerita tentang pengalaman pertama saya menggunakan Filament. Awalnya terasa menantang, namun setelah memahami konsep dasarnya, proses pembuatan dasbor admin menjadi sangat cepat dan menyenangkan.',
        ]);

        Post::factory()->create([
            'title' => 'Mengapa Livewire Mengubah Cara Saya Membuat Web',
            'slug' => 'mengapa-livewire-mengubah-cara-saya',
            'content' => 'Livewire memberikan kemampuan untuk membuat antarmuka yang dinamis tanpa perlu menulis banyak JavaScript. Di artikel ini, saya akan membahas beberapa fitur favorit saya di Livewire.',
        ]);
    }
}
