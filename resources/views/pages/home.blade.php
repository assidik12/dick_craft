@extends('layouts.app')

@section('title', 'Home - Portofolio Saya')

@section('content')
    <!-- Hero Section -->
    <section class="min-h-[80vh] flex items-center bg-gradient-to-br from-teal-50 to-cyan-100 py-20">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
            <!-- Teks Hero -->
            <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-800 leading-tight mb-4">
                    Halo, Saya {{ $profile->name }}
                </h1>
                <p class="text-xl text-teal-800 mb-6">
                    Seorang Web Developer yang antusias dengan Laravel & Livewire.
                </p>
                <p class="text-gray-600 mb-8">
                    Saya bersemangat dalam menciptakan aplikasi web yang bersih, modern, dan fungsional.
                </p>
                <a href="{{ route('contact') }}" class="bg-teal-500 text-white px-8 py-3 rounded-full font-semibold text-lg hover:bg-teal-600 transition duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Hubungi Saya
                </a>
            </div>
            <!-- Gambar Hero -->
            <div class="md:w-1/3" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-white p-4 rounded-full shadow-2xl">
                    <img src="https://placehold.co/400x400/E2E8F0/4A5568?text=Foto+Profil" alt="Foto Profil" class="rounded-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4" data-aos="fade-up">Proyek Unggulan</h2>
            <p class="text-center text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">Beberapa karya terbaik yang pernah saya buat.</p>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- Loop data proyek dari controller --}}
                @foreach($projects as $project)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <img src="https://placehold.co/600x400/A0AEC0/4A5568?text=Gambar+Proyek" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-teal-600 bg-teal-100 px-3 py-1 rounded-full">{{ $project->category }}</span>
                        <h3 class="text-2xl font-bold mt-4 mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
                        <a href="#" class="font-semibold text-teal-500 hover:text-teal-600">Lihat Detail &rarr;</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('projects') }}" class="bg-gray-800 text-white px-8 py-3 rounded-full font-semibold text-lg hover:bg-gray-900 transition duration-300">
                    Lihat Semua Proyek
                </a>
            </div>
        </div>
    </section>
@endsection
