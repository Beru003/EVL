@extends('layouts.evl')
@section('judul', 'Daftar')

@section('konten')
<main class="auth">
    <div class="auth-brand order-2">
        <a class="brand" href="{{ route('unggah') }}">✓　EVALUASI RISIKO</a>
        <div class="orb" aria-hidden="true">✓</div>
        <h1>Kenali risikonya.<br>Lindungi informasinya.</h1>
        <p>Evaluasi dokumen sebelum dibagikan. Temukan informasi sensitif dan ambil langkah perlindungan yang tepat.</p>
    </div>
    <section class="auth-form">
        <div>
            <small>AKSES SISTEM</small>
            <h1>Buat Akun Baru</h1>
            <p>Daftar untuk mulai mengevaluasi dokumen Anda.</p>
            <label>Nama pengguna<input placeholder="Masukkan nama pengguna"></label>
            <label>Alamat posel<input type="email" placeholder="Masukkan alamat posel Anda"></label>
            <label>Kata sandi<input type="password" placeholder="Masukkan kata sandi"></label>
            <label>Konfirmasi kata sandi<input type="password" placeholder="Masukkan kembali kata sandi"></label>
            <a class="button wide" href="{{ route('masuk') }}">Daftar →</a>
            <p><a href="{{ route('masuk') }}">Sudah punya akun? Masuk</a></p>
            <p>Halaman demonstrasi. Data akun tidak dikirim.</p>
        </div>
    </section>
</main>
@endsection
