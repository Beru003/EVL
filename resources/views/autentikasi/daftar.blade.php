@extends('layouts.evl')
@section('judul', 'Daftar')

@section('konten')
<main class="auth halaman-masuk halaman-daftar">
    <div class="masuk-identitas order-2">
        <a class="brand inline-flex items-center gap-2.5" href="{{ route('unggah') }}">
            <img src="{{ asset('images/LOGO%20EVL.svg') }}" alt="" width="44" height="44" class="object-contain">
            EVALUASI RISIKO
        </a>
        <div class="masuk-pesan">
            <div class="masuk-ilustrasi" aria-hidden="true">
                <div class="masuk-perisai">
                    <img src="{{ asset('images/LOGO.svg') }}" alt="" width="110" height="110" class="object-contain">
                </div>
                <small class="masuk-privasi">Informasi terlindungi</small>
            </div>
            <h2>Kenali risikonya.<br>Lindungi informasinya.</h2>
            <p>Evaluasi dokumen sebelum dibagikan. Temukan informasi sensitif dan ambil langkah perlindungan yang tepat.</p>
            <ul class="masuk-fitur">
                <li>Deteksi informasi sensitif</li>
                <li>Evaluasi berbasis risiko</li>
            </ul>
        </div>
        <p class="masuk-kredit">Sistem Evaluasi Risiko Kebocoran Informasi</p>
    </div>
    <section class="auth-form masuk-panel" aria-labelledby="judul-daftar">
        <div>
            <small>AKSES SISTEM</small>
            <h1 id="judul-daftar">Buat Akun Baru</h1>
            <p>Daftar untuk memulai evaluasi risiko kebocoran informasi dan melindungi dokumen Anda.</p>
            <div class="daftar-kolom">
                <label>
                    Nama pengguna
                    <input type="text" placeholder="Masukkan nama pengguna">
                </label>
                <label>
                    Alamat posel
                    <input type="email" placeholder="Masukkan alamat posel Anda">
                </label>
                <label>
                    Kata sandi
                    <input type="password" placeholder="Masukkan kata sandi">
                </label>
                <label>
                    Konfirmasi kata sandi
                    <input type="password" placeholder="Masukkan kembali kata sandi">
                </label>
                <label class="masuk-opsi">
                    <input type="checkbox">
                    Ingat saya
                </label>
                <a class="button wide" href="{{ route('masuk') }}">Daftar →</a>
            </div>
            <p><a href="{{ route('masuk') }}">Sudah punya akun? Masuk</a></p>
            <p class="masuk-catatan">ⓘ Halaman demonstrasi. Data akun tidak dikirim.</p>
        </div>
    </section>
</main>
@endsection
