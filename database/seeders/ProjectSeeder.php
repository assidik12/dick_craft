<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // 3. Buat 4 Contoh Proyek
                Project::factory()->create([
                    'title' => 'Native Go E-Commerce API',
                    'description' => 'A robust RESTful API built from the ground up using the Go native net/http library, designed to power a simple e-commerce application. This project demonstrates core Go principles without external frameworks, managing user accounts, product catalogs, and transactions.',
                    'category' => 'Web App',
                    'link' => 'https://github.com/assidik12/go-restfull-api.git',
                ]);

                Project::factory()->create([
                    'title' => 'PIIP SIBER: IoT Innovation for a Sustainable Smart City in Tegal',
                    'description' => 'PIIP SIBER is an innovative project integrating Internet of Things (IoT) technology into urban infrastructure to enhance energy efficiency, public safety, and emergency response. This initiative supports the vision of a sustainable Smart City by utilizing eco-friendly and energy-efficient IoT solutions.',
                    'category' => 'Internet of Things',
                    'link' => 'https://youtu.be/KBy9QFRyxrU?si=FfCW85IookA8_gys',
                ]);

                Project::factory()->create([
                    'title' => 'Aplikasi Voting Sederhana Dengan Teknologi Blockchain',
                    'description' => 'Proyek aplikasi voting sederhana yang menggunakan teknologi blockchain. Project ini dibuat untuk memahami dasar-dasar teknologi blockchain dan bagaimana mengintegrasikan teknologi tersebut dengan aplikasi web sederhana.',
                    'category' => 'Blockchain',
                    'link' => 'https://github.com/assidik12/belajar-blockchain.git',
                ]);

                Project::factory()->create([
                    'title' => 'Blog Pribadi',
                    'description' => 'Proyek blog pribadi untuk sharing artikel teknologi. Dibangun dari nol dengan Laravel dan dasbor adminnya menggunakan Filament.',
                    'category' => 'Web App',
                    'link' => 'https://github.com/assidik12/dick_craft.git',
                ]);
                Project::factory()->create([
                    'title' => 'Fullstack NEXTJS E-Commerce',
                    'description' => 'Proyek fullstack e-commerce menggunakan NextJS dan Tailwind CSS. Dibangun dari nol dengan NextJS dan Menggunakan Firebase sebagai database.',
                    'category' => 'Web App',
                    'link' => 'https://garasi-kita-isfoc33te-assidik.vercel.app/',
                ]);
    }
}
