@extends('layouts.evl')
@section('judul', 'Masuk')

@section('konten')
<main class="auth halaman-masuk" id="konten-utama">
    <div class="masuk-identitas">
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
    <section class="auth-form masuk-panel" aria-labelledby="judul-masuk">
        <div>
            <small>AKSES SISTEM</small>
            <h1 id="judul-masuk">Masuk ke Sistem Evaluasi Risiko</h1>
            <p>Selamat datang kembali. Masuk untuk melanjutkan evaluasi dokumen Anda.</p>
            <form method="POST" action="{{ route('masuk.demo') }}">
                @csrf
                <label>
                    Alamat posel
                    <input id="email-masuk" name="email" type="email" autocomplete="email" placeholder="Masukkan alamat posel Anda">
                </label>
                <label>
                    Kata sandi
                    <input id="password-masuk" name="password" type="password" autocomplete="current-password" placeholder="Masukkan kata sandi">
                </label>
                <label class="masuk-opsi">
                    <input id="ingat-masuk" name="remember" type="checkbox">
                    Ingat saya
                </label>
                <button class="button wide" type="submit">Masuk →</button>
            </form>
            <p><a href="{{ route('daftar') }}">Belum punya akun? Daftar</a></p>
            <p class="masuk-catatan">ⓘ Halaman demonstrasi. Data akun tidak dikirim.</p>
        </div>
    </section>
</main>
@endsection
