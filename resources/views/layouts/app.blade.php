<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Profesional')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Animate On Scroll (AOS) Library for animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <!-- Header / Navigasi -->
    <header class="bg-white/80 backdrop-blur-lg sticky top-0 z-50 shadow-sm">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-teal-600">
                dick_craft
            </a>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-teal-500 transition duration-300">Home</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-teal-500 transition duration-300">Tentang</a>
                <a href="{{ route('projects') }}" class="text-gray-600 hover:text-teal-500 transition duration-300">Proyek</a>
                <a href="{{ route('blog') }}" class="text-gray-600 hover:text-teal-500 transition duration-300">Blog</a>
                <a href="{{ route('contact') }}" class="bg-teal-500 text-white px-4 py-2 rounded-full hover:bg-teal-600 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Kontak
                </a>
            </div>
            <!-- Tombol menu mobile bisa ditambahkan di sini -->
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; {{ date('Y') }} [Nama Kamu]. Dibuat dengan ❤️ menggunakan Laravel.</p>
            <!-- Link media sosial bisa ditambahkan di sini -->
        </div>
    </footer>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>
