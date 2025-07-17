<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Selamat datang di website saya, seorang web developer yang memiliki passion dalam membuat website yang menarik dan fungsional. Saya memiliki pengalaman dalam menggunakan teknologi seperti Laravel, Tailwind CSS, dan JavaScript. Saya juga memiliki kemampuan dalam menggunakan tool seperti Git dan Docker. Saya yakin bahwa saya dapat membantu Anda dalam membuat website yang sesuai dengan kebutuhan Anda.">
    <title>Portfolio - @yield('title', 'Welcome')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- Di proyek nyata, ini akan menjadi @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Konfigurasi Tailwind untuk prototyping di CDN --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'brand': {
                            'dark': '#0D1117',
                            'light': '#161B22',
                            'border': '#30363D',
                            'cyan': '#22D3EE',
                            'cyan-light': '#67E8F9',
                        },
                        'text': {
                            'primary': '#E6EDF3',
                            'secondary': '#8B949E',
                        }
                    },
                    boxShadow: {
                        'glow-cyan': '0 0 15px rgba(34, 211, 238, 0.4)',
                        'glow-cyan-light': '0 0 25px rgba(34, 211, 238, 0.6)',
                    }
                }
            }
        }
    </script>

    {{-- Alpine.js untuk interaktivitas menu mobile --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- =================================================================== -->
    <!-- KODE PENTING DITAMBAHKAN DI SINI                                     -->
    <!-- Ini akan memuat semua style yang di-push dari halaman lain (contact, home, dll) -->
    <!-- =================================================================== -->
    @stack('styles')

</head>
<body class="bg-brand-dark font-sans text-text-primary antialiased">
    @if (request()->routeIs('login'))
        {{-- Jika title nya = auth (ada di page login.blade.php) maka disable navbar dan footer --}}
        <main>
            @yield('content')
        </main>
    @else
        {{-- Komponen Navbar --}}
        <x-navbar />

        {{-- Konten Halaman Dinamis --}}
        <main>
            @yield('content')
        </main>

        {{-- Komponen Footer --}}
        <x-footer />
    @endif

</body>
</html>
