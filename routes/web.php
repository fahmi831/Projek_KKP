<?php

use Illuminate\Support\Facades\Route;

// 1. Halaman Home (Beranda)
Route::get('/', function () {
    return view('beranda');
});

// 2. Halaman Tentang
Route::get('/tentang', function () {
    // Anda harus membuat file: resources/views/tentang.blade.php
    return view('tentang');
});

// 3. Halaman Menu
Route::get('/menu', function () {
    // Anda harus membuat file: resources/views/menu.blade.php
    return view('menu');
});

// 4. Halaman Ruangan
Route::get('/ruangan', function () {
    // Anda harus membuat file: resources/views/ruangan.blade.php
    return view('ruangan');
});

// 5. Halaman Reservasi
Route::get('/reservasi', function () {
    // Anda harus membuat file: resources/views/reservasi.blade.php
    return view('reservasi');
});

// 6. Login & Register (Nanti diganti dengan logic Auth bawaan Laravel)
Route::get('/login', function () { return view('auth.login'); });
Route::get('/register', function () { return view('auth.register'); });
