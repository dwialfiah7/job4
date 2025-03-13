@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')

<div class="jumbotron text-center bg-light py-5">
    <h1 class="dispay-4">Selamat Datang di My App</h1>
    <p>Aplikasi Laravel sederhana yang menampilkan fitur-fitur modern dengan Laravel Blade.</p>

    @if(Route::has('profile'))
        <a href="{{ route('profile') }}" class="btn btn-primary btn-lg">Lihat Profile</a>
    @endif
</div>

<div class="container text-center my-5">
    <h2 class="fw-bold">🔥 Keunggulan MyApp 🔥</h2>
    <div class="row mt-4">
        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h1>⚡</h1>
                <h4 class="mt-3">Cepat & Responsif</h4>
                <p>Dirancang untuk bekerja dengan cepat dan memiliki tampilan yang responsif.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h1>🛡️</h1>
                <h4 class="mt-3">Keamanan Terjamin</h4>
                <p>Menawarkan perlindungan data dengan enkripsi tingkat tinggi.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h1>🤝</h1>
                <h4 class="mt-3">Dukungan Komunitas</h4>
                <p>Menyediakan bantuan dari komunitas serta tim support profesional.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h1>🎨</h1>
                <h4 class="mt-3">Desain Modern</h4>
                <p>Menghadirkan tampilan yang bersih, elegan, dan mudah digunakan.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h1>⚙️</h1>
                <h4 class="mt-3">Mudah Dikustomisasi</h4>
                <p>Memungkinkan penyesuaian tampilan dan fitur sesuai kebutuhan.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-4">
                <h1>📈</h1>
                <h4 class="mt-3">Performa Optimal</h4>
                <p>Dikembangkan dengan teknologi terbaru untuk performa yang lebih baik.</p>
            </div>
        </div>
    </div>
</div>

<div class="container text-center my-5">
    <h2 class="fw-bold">🌟 Fitur Utama</h2>
    <div class="row mt-4">
        @foreach([
            ['icon' => '🔗', 'title' => 'Integrasi API', 'desc' => 'Dapat dihubungkan dengan layanan lain dengan mudah.'],
            ['icon' => '👥', 'title' => 'Manajemen User', 'desc' => 'Login, register, dan sistem peran pengguna yang fleksibel.'],
            ['icon' => '🌗', 'title' => 'Mode Gelap & Terang', 'desc' => 'Sesuaikan tampilan sesuai preferensi Anda.'],
            ['icon' => '🌍', 'title' => 'Multi-Bahasa', 'desc' => 'Mendukung berbagai bahasa untuk pengguna global.']
        ] as $feature)
        <div class="col-md-6 mb-4">
            <div class="card shadow p-3">
                <h1>{{ $feature['icon'] }}</h1>
                <h4 class="mt-3">{{ $feature['title'] }}</h4>
                <p>{{ $feature['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container text-center my-5">
    <h2 class="fw-bold">💬 Apa Kata Pengguna?</h2>
    <div class="row justify-content-center mt-4">
        @foreach([
            ['name' => 'Budi Santoso', 'text' => 'MyApp sangat membantu dalam meningkatkan produktivitas saya!'],
            ['name' => 'Ayu Rahmawati', 'text' => 'Fitur-fiturnya sangat lengkap dan mudah digunakan!'],
            ['name' => 'Doni Prasetyo', 'text' => 'Keamanannya luar biasa, saya tidak khawatir dengan data saya.']
        ] as $testimonial)
        <div class="col-md-8 mb-3">
            <div class="card p-3 shadow">
                <p class="text-muted">"{{ $testimonial['text'] }}"</p>
                <h5>- {{ $testimonial['name'] }}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection