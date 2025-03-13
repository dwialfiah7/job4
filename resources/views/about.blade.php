@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="card p-3 mb-4">
        <h1 class="text-center">🔹 Tentang Kami 🔹</h1>
    </div>

    <div class="card p-3 mb-4">
        <h2>🎯 Visi & Misi</h2>
        <h3>🌟 Visi</h3>
        <p>
            🚀 Menjadi perusahaan teknologi yang inovatif, adaptif, dan memberikan solusi digital terbaik untuk berbagai industri. 
            Kami berkomitmen menciptakan produk berkualitas tinggi yang dapat diakses dan digunakan oleh semua kalangan.
        </p>
        <h3>📌 Misi</h3>
        <ul>
            <li>💻 Mengembangkan aplikasi berbasis web yang mudah digunakan dan memiliki fitur modern.</li>
            <li>🎯 Memberikan solusi teknologi yang efisien dan sesuai dengan kebutuhan pelanggan.</li>
            <li>⚡ Berinovasi secara berkelanjutan dengan mengikuti perkembangan teknologi terkini.</li>
            <li>🤝 Menciptakan lingkungan kerja yang kolaboratif dan mendukung pengembangan bakat.</li>
            <li>📈 Menjalin kerja sama strategis dengan berbagai pihak untuk menghadirkan layanan terbaik.</li>
        </ul>
    </div>

    <div class="card p-3 mb-4">
        <h2 class="text-center">📜 Sejarah Kami</h2>
        <p>
            ⏳ MyApp didirikan pada tahun 2015 dengan tujuan menghadirkan teknologi yang membantu berbagai industri dalam mengelola bisnis mereka secara digital. 
            Berawal dari sebuah startup kecil, kami berkembang menjadi perusahaan yang dipercaya oleh ribuan pengguna di seluruh Indonesia. 
            Seiring waktu, kami terus berinovasi dengan mengembangkan fitur-fitur canggih, meningkatkan pengalaman pengguna, dan memperluas jangkauan layanan kami.
        </p>
        <p>
            🛤️ Dalam perjalanan kami, kami menghadapi berbagai tantangan, mulai dari keterbatasan sumber daya hingga perubahan tren teknologi. 
            Namun, dengan semangat pantang menyerah dan tim yang solid, kami berhasil melewati setiap rintangan dan terus bertumbuh. 
            Saat ini, MyApp telah memiliki beberapa produk unggulan yang digunakan oleh berbagai perusahaan, institusi pendidikan, dan individu kreatif.
        </p>
    </div>

    <div class="card p-3 mb-4">
    <h2 class="text-center">👥 Tim Kami</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center p-3 position-relative">
                <img src="{{ asset('image/ahmad.jpg') }}" class="team-img rounded-circle border" alt="Ahmad Ramadhan">
                <div class="card-body mt-3">
                    <h5 class="card-title">Ahmad Ramadhan</h5>
                    <p class="card-text">Pendiri & CEO</p>
                    <p class="card-desc">🚀 Ahmad memiliki pengalaman lebih dari 10 tahun di industri teknologi. Ia adalah pemimpin visioner yang berkomitmen untuk mengembangkan solusi digital yang inovatif.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-3 position-relative">
                <img src="{{ asset('image/sarah.png') }}" class="team-img rounded-circle border" alt="Sarah Putri">
                <div class="card-body mt-3">
                    <h5 class="card-title">Sarah Putri</h5>
                    <p class="card-text">Pengembang Utama</p>
                    <p class="card-desc">💡 Sarah adalah seorang software engineer berbakat yang telah mengembangkan berbagai aplikasi dengan teknologi terkini. Keahliannya meliputi backend, frontend, dan AI.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-3 position-relative">
                <img src="{{ asset('image/dimas.webp') }}" class="team-img rounded-circle border" alt="Dimas Arya">
                <div class="card-body mt-3">
                    <h5 class="card-title">Dimas Arya</h5>
                    <p class="card-text">Desainer UI/UX</p>
                    <p class="card-desc">🎨 Dimas memiliki keahlian dalam desain dan pengalaman pengguna. Ia memastikan setiap fitur di MyApp mudah digunakan serta memiliki tampilan yang menarik dan modern.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="card p-3 mb-4 text-center">
        <h2>📞 Hubungi Kami</h2>
        <p>
            💬 Kami selalu terbuka untuk mendengar pertanyaan, saran, atau kerja sama dari Anda. Jangan ragu untuk menghubungi kami melalui:
        </p>
        <ul class="list-unstyled">
            <p>📧 <strong>Email:</strong> <a href="mailto:info@myapp.com">info@myapp.com</a></p>
            <p>📞 <strong>Telepon:</strong> <a href="tel:+62123456789">+62 123456789</a></p>
            <p>📍 <strong>Alamat:</strong> 🏢 Jl. Mawar No.99, Jakarta, Indonesia</p>
        </ul>
        <p>
            🚪Anda juga bisa mengunjungi kantor kami secara langsung untuk berdiskusi lebih lanjut mengenai layanan yang kami tawarkan.
        </p>
    </div>
@endsection
