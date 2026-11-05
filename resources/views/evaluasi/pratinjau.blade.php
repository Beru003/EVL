@extends('layouts.evl')
@section('judul', 'Pratinjau Dokumen')
@section('konten')
<main>
    <p>
        <a href="{{ route('unggah') }}">
            Unggah Dokumen
        </a>
        / Pratinjau Dokumen
    </p>
    <p class="steps">
        ① Unggah Dokumen　　② Pratinjau Dokumen　　③ Hasil Evaluasi
    </p>
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
                <small>
                    ✓ Siap untuk dievaluasi
                </small>
            </section>
            <section>
                <h2>
                    Evaluasi Dokumen
                </h2>
                <p>
                    Tinjau contoh deteksi informasi sensitif dan skor risiko kebocoran.
                </p>
                <p>
                    ✓ Informasi pribadi
                    <br>
                    ✓ Informasi keuangan sensitif
                    <br>
                    ✓ Skor risiko per salindia
                </p>
                <a class="button wide" href="{{ route('hasil') }}">
                    Evaluasi
                </a>
                <a class="button secondary wide" href="{{ route('unggah') }}">
                    ← Ganti Dokumen
                </a>
            </section>
        </aside>
    </div>
</main>
@endsection
