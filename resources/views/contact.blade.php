@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container border rounded">
    <h1 class="text-center mt-4">📞 Hubungi Kami</h1>
    <p class="text-center">Kami selalu terbuka untuk mendengar pertanyaan, saran, atau kerja sama dari Anda.</p>
    
    <div class="row">
        <div class="col-md-6">
            <h4>📧 Email</h4>
            <p><a href="mailto:info@myapp.com">info@myapp.com</a></p>
            
            <h4>📞 Telepon</h4>
            <p><a href="tel:+62123456789">+62 123456789</a></p>
            
            <h4>🏢 Alamat Kantor</h4>
            <p>Jl. Mawar No.99, Jakarta, Indonesia</p>
            
            <h4>🕒 Jam Operasional</h4>
            <p>Senin - Jumat: 08.00 - 17.00 WIB</p>
            <p>Sabtu - Minggu: Tutup</p>
            
            <h4>📍 Lokasi di Google Maps</h4>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.504128866214!2d107.62959951504858!3d-6.914744995008404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c1cce6c5d5%3A0x2f87b9f16e3c19e8!2sJl.%20Mawar%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1645678912345" 
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <div class="col-md-6">
            <h4>✍️ Kirim Pesan</h4>
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama lengkap Anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan email Anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="tel" class="form-control" placeholder="Masukkan nomor telepon Anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Subjek</label>
                    <select class="form-select">
                        <option>Pilih subjek pesan</option>
                        <option>Pertanyaan</option>
                        <option>Masukan</option>
                        <option>Kerja Sama</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pesan</label>
                    <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Lampiran</label>
                    <input type="file" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Pria</label>
                    
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Wanita</label>
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="terms">
                    <label for="terms">Saya menyetujui syarat dan ketentuan</label>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
    
    <div class="text-center mt-5 mb-4">
    <h4>🔗 Ikuti Kami di Media Sosial</h4>
        <a href="#" class="btn btn-primary me-2">Facebook</a>
        <a href="#" class="btn btn-danger me-2">Instagram</a>
        <a href="#" class="btn btn-info me-2">Twitter</a>
        <a href="#" class="btn btn-dark">LinkedIn</a>
    </div>
</div>

<style>
input[type="radio"]:checked {
    accent-color: blue;
}

input[type="checkbox"]:checked {
    accent-color: blue;
}
</style>

@endsection
