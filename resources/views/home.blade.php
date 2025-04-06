@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')

<div class="jumbotron text-center bg-light py-5" data-aos="fade-down">
    <h1 class="display-4">Selamat Datang di My App</h1>
    <p>Aplikasi Laravel sederhana yang menampilkan fitur-fitur modern dengan Laravel Blade.</p>

    @if(Route::has('profile'))
        <a href="{{ route('profile') }}" class="btn btn-primary btn-lg mt-3" data-aos="zoom-in">Lihat Profile</a>
    @endif
</div>

<div class="container text-center my-5">
    <h2 class="fw-bold" data-aos="fade-up">🔥 Keunggulan MyApp 🔥</h2>
    <div class="row mt-4">
        @foreach([
            ['⚡', 'Cepat & Responsif', 'Dirancang untuk bekerja dengan cepat dan memiliki tampilan yang responsif.'],
            ['🛡️', 'Keamanan Terjamin', 'Menawarkan perlindungan data dengan enkripsi tingkat tinggi.'],
            ['🤝', 'Dukungan Komunitas', 'Menyediakan bantuan dari komunitas serta tim support profesional.'],
            ['🎨', 'Desain Modern', 'Menghadirkan tampilan yang bersih, elegan, dan mudah digunakan.'],
            ['⚙️', 'Mudah Dikustomisasi', 'Memungkinkan penyesuaian tampilan dan fitur sesuai kebutuhan.'],
            ['📈', 'Performa Optimal', 'Dikembangkan dengan teknologi terbaru untuk performa yang lebih baik.'],
        ] as [$icon, $title, $desc])
        <div class="col-md-4 mb-4">
            <div class="card shadow p-4" data-aos="fade-up">
                <h1>{{ $icon }}</h1>
                <h4 class="mt-3">{{ $title }}</h4>
                <p>{{ $desc }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container my-5 text-center">
    <h2 class="fw-bold" data-aos="fade-up">📊 Statistik MyApp</h2>
    <div class="row mt-4">
        <div class="col-md-3" data-aos="zoom-in">
            <h3 class="text-primary">10K+</h3>
            <p>Pengguna Aktif</p>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
            <h3 class="text-success">99.9%</h3>
            <p>Uptime Server</p>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
            <h3 class="text-warning">25+</h3>
            <p>Fitur Premium</p>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
            <h3 class="text-danger">100+</h3>
            <p>Testimoni Positif</p>
        </div>
    </div>
</div>

<div class="container text-center my-5">
    <h2 class="fw-bold" data-aos="fade-up">🌟 Fitur Utama</h2>
    <div class="row mt-4">
        @foreach([
            ['🔗', 'Integrasi API', 'Dapat dihubungkan dengan layanan lain dengan mudah.'],
            ['👥', 'Manajemen User', 'Login, register, dan sistem peran pengguna yang fleksibel.'],
            ['🌗', 'Mode Gelap & Terang', 'Sesuaikan tampilan sesuai preferensi Anda.'],
            ['🌍', 'Multi-Bahasa', 'Mendukung berbagai bahasa untuk pengguna global.'],
        ] as [$icon, $title, $desc])
        <div class="col-md-6 mb-4">
            <div class="card shadow p-3" data-aos="fade-up">
                <h1>{{ $icon }}</h1>
                <h4 class="mt-3">{{ $title }}</h4>
                <p>{{ $desc }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container text-center my-5">
    <h2 class="fw-bold" data-aos="fade-up">💬 Apa Kata Pengguna?</h2>
    <div class="row justify-content-center mt-4">
        @foreach([
            ['Budi Santoso', 'MyApp sangat membantu dalam meningkatkan produktivitas saya!'],
            ['Ayu Rahmawati', 'Fitur-fiturnya sangat lengkap dan mudah digunakan!'],
            ['Doni Prasetyo', 'Keamanannya luar biasa, saya tidak khawatir dengan data saya.'],
        ] as [$name, $text])
        <div class="col-md-8 mb-3">
            <div class="card p-3 shadow" data-aos="zoom-in">
                <p class="text-muted">"{{ $text }}"</p>
                <h5>- {{ $name }}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
