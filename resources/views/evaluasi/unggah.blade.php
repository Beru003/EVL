@extends('layouts.evl')
@section('judul', 'Unggah Dokumen')
@section('konten')
<main class="landing">
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
    <section>
        <h2>
            Dokumen baru
        </h2>
        <div class="drop">
            <b class="icon">
                ⇧
            </b>
            <h2>
                Seret dan lepas dokumen di sini
            </h2>
            <p>
                atau pilih berkas dari perangkat Anda
            </p>
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
    <p class="center steps">
        CARA KERJA
    </p>
    <div class="trio">
        <section>
            <h3>
                01 · Unggah dokumen
            </h3>
            <p>
                Pilih dokumen yang ingin diperiksa.
            </p>
        </section>
        <section>
            <h3>
                02 · Pratinjau dan evaluasi
            </h3>
            <p>
                Tinjau dokumen sebelum mengevaluasinya.
            </p>
        </section>
        <section>
            <h3>
                03 · Tinjau hasil evaluasi
            </h3>
            <p>
                Lihat skor, temuan, dan rekomendasi.
            </p>
        </section>
    </div>
    <section>
        <h3>
            ⓘ Catatan penting
        </h3>
        <p>
            Gunakan dokumen dengan teks yang dapat dibaca dan tanpa perlindungan kata sandi.
        </p>
    </section>
</main>
@endsection
