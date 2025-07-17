<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk menampilkan halaman utama
    public function home()
    {
        $profile = User::first();
        $projects = Project::latest()->take(3)->get();
        $skills = Skill::where('is_active', true)->get();
        return view('pages.home', compact('profile', 'projects', 'skills'));
    }

    // Method untuk menampilkan halaman "Tentang Saya"
    public function about()
    {
        $profile = User::first();
        return view('pages.about', compact('profile'));
    }

    // Method untuk menampilkan halaman daftar proyek
    public function projects()
    {
        // Di sini kita akan menggunakan komponen Livewire nanti
        return view('pages.projects');
    }

    // Method untuk menampilkan halaman daftar blog
    public function blog()
    {
        $posts = Post::latest()->paginate(6);
        return view('pages.blog', compact('posts'));
    }

    // Method untuk menampilkan halaman detail blog
    public function blogDetail(Post $post)
    {
        return view('pages.blog-detail', compact('post'));
    }

    // Method untuk menampilkan halaman kontak
    public function contact()
    {
        return view('pages.contact');
    }

    // Method untuk memproses form kontak (bisa dikembangkan nanti)
    public function sendContactMessage(Request $request)
    {
        // Logika untuk mengirim email, dll.
        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
