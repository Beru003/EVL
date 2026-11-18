@extends('layouts.evl')
@section('judul', 'Pratinjau Dokumen')
@section('konten')
    <main class="pratinjau-page" id="konten-utama">
    <nav class="pratinjau-breadcrumb" aria-label="Lokasi halaman">
        <a href="{{ route('unggah') }}">
            Unggah Dokumen
        </a>
        <span aria-hidden="true">/</span>
        <span aria-current="page">Pratinjau Dokumen</span>
    </nav>
    <h1 class="sr-only">Pratinjau Dokumen</h1>
    <ol class="pratinjau-stepper" aria-label="Langkah evaluasi">
        <li><span>1</span> Unggah Dokumen</li>
        <li aria-current="step"><span>2</span> Pratinjau Dokumen</li>
        <li><span>3</span> Hasil Evaluasi</li>
    </ol>
    <div class="preview">
        <x-dokumen />
        <aside>
            <section>
                <h2>
                    Informasi Dokumen
                </h2>
                <dl>
                    @foreach ([
                        'Nama berkas' => 'Proposal Penelitian.pptx',
                        'Format' => 'PPTX',
                        'Ukuran' => '2,5 MB',
                        'Jumlah salindia' => '9',
                        'Diunggah' => 'Baru saja',
                    ] as $label => $nilai)
                        <div>
                            <dt>
                                {{ $label }}
                            </dt>
                            <dd>
                                {{ $nilai }}
                            </dd>
                        </div>
                    @endforeach
                </dl>
                <div class="pratinjau-status">
                    <strong>Siap untuk dievaluasi</strong>
                    Dokumen contoh berhasil dimuat.
                </div>
            </section>
            <section>
                <h2>
                    Evaluasi Dokumen
                </h2>
                <p>
                    Tinjau contoh deteksi informasi sensitif dan skor risiko kebocoran.
                </p>
                <ul class="pratinjau-daftar">
                    <li><span aria-hidden="true">✓</span> Informasi pribadi</li>
                    <li><span aria-hidden="true">✓</span> Informasi keuangan sensitif</li>
                    <li><span aria-hidden="true">✓</span> Skor risiko per salindia</li>
                </ul>
                <a class="button wide" href="{{ route('hasil') }}">
                    Evaluasi
                </a>
                <a class="button secondary wide" href="{{ route('unggah') }}">
                    ← Ganti Dokumen
                </a>
            </section>
            <p class="pratinjau-catatan">
                Tinjau dokumen sebelum menekan Evaluasi.
            </p>
        </aside>
    </div>
</main>
@endsection
