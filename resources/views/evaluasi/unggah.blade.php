@extends('layouts.evl')
@section('judul', 'Unggah Dokumen')
@section('konten')
<main class="landing" id="konten-utama">
    <div class="hero">
        <small>
            ● Unggah · Pratinjau · Evaluasi
        </small>
        <h1>
            Kenali risikonya.
            <br>
            Lindungi informasinya.
        </h1>
        <p>
            Unggah dokumen PPT, PPTX, atau PDF dan temukan informasi sensitif
            <br>
            sebelum dokumen Anda tersebar.
        </p>
    </div>
    <section class="unggah-card" aria-labelledby="dokumen-baru">
        <div class="unggah-card-header">
            <h2 id="dokumen-baru"><span aria-hidden="true">⇧</span> Dokumen baru</h2>
            <small>PPT · PPTX · PDF</small>
        </div>
        <div class="drop">
            <b class="icon" aria-hidden="true">
                ⇧
            </b>
            <div class="unggah-hint">
                <h2>Seret dan lepas dokumen di sini</h2>
                <p>atau pilih berkas dari perangkat Anda</p>
            </div>
            <a class="button" href="{{ route('pratinjau') }}">
                ＋ Pilih Berkas
            </a>
            <p>
                Format PPT, PPTX, PDF · Maksimum 20 MB
            </p>
        </div>
        <p class="center">
            Prototipe ini membuka pratinjau dokumen contoh.
        </p>
    </section>
    <h2 class="center steps" id="cara-kerja">
        CARA KERJA
    </h2>
    <div class="trio">
        <section>
            <span class="unggah-step-icon" aria-hidden="true">⇧</span>
            <h3><span>01</span> Unggah dokumen</h3>
            <p>
                Pilih dokumen PPT, PPTX, atau PDF yang ingin diperiksa dari perangkat Anda.
            </p>
        </section>
        <section>
            <span class="unggah-step-icon" aria-hidden="true">▤</span>
            <h3><span>02</span> Pratinjau dan evaluasi</h3>
            <p>
                Pratinjau dokumen, lalu tekan tombol Evaluasi untuk memulai pemeriksaan informasi sensitif.
            </p>
        </section>
        <section>
            <span class="unggah-step-icon" aria-hidden="true">◇</span>
            <h3><span>03</span> Tinjau hasil evaluasi</h3>
            <p>
                Lihat skor risiko, informasi yang terdeteksi, dan rekomendasi perlindungan yang tepat.
            </p>
        </section>
    </div>
    <section class="unggah-note">
        <span class="unggah-step-icon" aria-hidden="true">ⓘ</span>
        <div>
            <h3>Catatan penting</h3>
            <p>Pastikan dokumen tidak dilindungi kata sandi agar dapat diproses. Gunakan berkas dengan teks yang dapat dibaca untuk hasil evaluasi yang optimal.</p>
        </div>
    </section>
</main>
@endsection
