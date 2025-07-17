<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // 4. Buat 2 Contoh Tulisan Blog
                Post::factory()->create([
                    'title' => 'Perjalanan Saya Mempelajari Laravel Filament',
                    'slug' => 'perjalanan-saya-mempelajari-laravel-filament',
                    'link' => 'https://filamentphp.com/',
                    'content' => 'Ini adalah cerita tentang pengalaman pertama saya menggunakan Filament. Awalnya terasa menantang, namun setelah memahami konsep dasarnya, proses pembuatan dasbor admin menjadi sangat cepat dan menyenangkan.',
                ]);

                Post::factory()->create([
                    'title' => 'Mengapa Livewire Mengubah Cara Saya Membuat Web',
                    'slug' => 'mengapa-livewire-mengubah-cara-saya',
                    'link' => 'https://laravel-livewire.com/',
                    'content' => 'Livewire memberikan kemampuan untuk membuat antarmuka yang dinamis tanpa perlu menulis banyak JavaScript. Di artikel ini, saya akan membahas beberapa fitur favorit saya di Livewire.',
                ]);
    }
}
