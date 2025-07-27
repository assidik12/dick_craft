<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class IconHelper
{
    /**
     * Mengambil konten SVG dari file ikon berdasarkan nama.
     *
     * @param string $name Nama ikon (contoh: 'Laravel', 'PHP').
     * @param string $default Ikon default jika file tidak ditemukan.
     * @return string Konten SVG.
     */
    public static function getIcon(string $name, string $default = ''): string
    {
        // Membersihkan dan mengubah nama menjadi format file (contoh: 'Vue.js' -> 'vuejs')
        $fileName = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $name));

        // Menggunakan resource_path() untuk menunjuk ke folder resources/assets/icons
        $path = resource_path('assets/icons/' . $fileName . '.svg');

        if (!File::exists($path)) {
            // Jika file tidak ada, kembalikan SVG placeholder atau string kosong
            return $default ?: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
</svg>';
        }

        // Mengembalikan konten file SVG yang ditemukan
        return File::get($path);
    }
}