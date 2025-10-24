<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectPageController;
use Illuminate\Support\Facades\Route;
use League\Csv\Query\Row;

// Halaman Utama
Route::get('/', [PageController::class, 'home'])->name('home');

// Halaman Tentang Saya
Route::get('/about', [PageController::class, 'about'])->name('about');

// Halaman Daftar Proyek
Route::get('/projects', [PageController::class, 'projects'])->name('projects');

// Halaman Detail Proyek (menggunakan slug agar URL lebih cantik)
Route::get('/projects/{project:slug}', [PageController::class, 'projectDetail'])->name('projects.detail');

// Halaman Daftar Tulisan Blog
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

// Halaman Detail Tulisan Blog
Route::get('/blog/{post:slug}', [PageController::class, 'blogDetail'])->name('blog.detail');

// Halaman Kontak
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Rute untuk memproses form kontak
Route::post('/contact', [PageController::class, 'sendContactMessage'])->name('contact.send');


Route::controller('login', 'UserController');

// Project web routes
Route::get('/projects', [ProjectPageController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectPageController::class, 'create'])->name('projects.create');
Route::get('/projects/{id}', [ProjectPageController::class, 'show'])->name('projects.show');
Route::get('/projects/{id}/edit', [ProjectPageController::class, 'edit'])->name('projects.edit');
