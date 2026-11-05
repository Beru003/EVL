@extends('layouts.evl')
@section('judul', 'Masuk')

@section('konten')
<main class="auth">
    <div class="auth-brand ">
        <a class="brand" href="{{ route('unggah') }}">✓　EVALUASI RISIKO</a>
        <div class="orb" aria-hidden="true">✓</div>
        <h1>Kenali risikonya.<br>Lindungi informasinya.</h1>
        <p>Evaluasi dokumen sebelum dibagikan. Temukan informasi sensitif dan ambil langkah perlindungan yang tepat.</p>
    </div>
    <section class="auth-form">
        <div>
            <small>AKSES SISTEM</small>
            <h1>Sistem Evaluasi Risiko Kebocoran Informasi</h1>
            <p>Selamat datang kembali. Masuk untuk melanjutkan evaluasi.</p>
            <label>Alamat posel<input type="email" placeholder="Masukkan alamat posel Anda"></label>
            <label>Kata sandi<input type="password" placeholder="Masukkan kata sandi"></label>
            <form method="POST" action="{{ route('masuk.demo') }}">
                @csrf
                <button class="button wide">Masuk →</button>
            </form>
            <p><a href="{{ route('daftar') }}">Belum punya akun? Daftar</a></p>
            <p>Halaman demonstrasi. Data akun tidak dikirim.</p>
        </div>
    </section>
</main>
@endsection
