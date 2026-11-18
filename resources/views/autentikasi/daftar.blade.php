@extends('layouts.evl')
@section('judul', 'Daftar')

@section('konten')
<main class="auth halaman-masuk halaman-daftar" id="konten-utama">
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
            <p class="masuk-slogan">Kenali risikonya.<br>Lindungi informasinya.</p>
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
                    <input id="nama-daftar" name="name" type="text" autocomplete="name" placeholder="Masukkan nama pengguna">
                </label>
                <label>
                    Alamat posel
                    <input id="email-daftar" name="email" type="email" autocomplete="email" placeholder="Masukkan alamat posel Anda">
                </label>
                <label>
                    Kata sandi
                    <input id="password-daftar" name="password" type="password" autocomplete="new-password" placeholder="Masukkan kata sandi">
                </label>
                <label>
                    Konfirmasi kata sandi
                    <input id="password-konfirmasi" name="password_confirmation" type="password" autocomplete="new-password" placeholder="Masukkan kembali kata sandi">
                </label>
                <label class="masuk-opsi">
                    <input id="ingat-daftar" name="remember" type="checkbox">
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
