@props(['hasil' => false])
<section class="viewer" aria-labelledby="judul-viewer">
    <h2 class="bar viewer-title" id="judul-viewer"><span aria-hidden="true">▤</span><span>Proposal Penelitian.pptx</span><small>Salindia {{ $hasil ? 3 : 1 }} dari 9</small></h2>
    <div class="slide">
        <h3>PROPOSAL PENELITIAN</h3>
        <div class="slide-content">
            <strong>Data Responden Penelitian</strong>
            <dl>
                <div class="sensitive"><dt>NIK</dt><dd>3273********0002</dd><b>{{ $hasil ? 'SENSITIF' : 'DATA' }}</b></div>
                <div><dt>Nama</dt><dd>Budi Santoso</dd></div>
                <div><dt>Institusi</dt><dd>Universitas Indonesia</dd></div>
                <div><dt>Judul</dt><dd>Analisis Keamanan Data Pribadi</dd></div>
            </dl>
            <p>Tinjau isi salindia sebelum dibagikan.</p>
        </div>
    </div>
    <ol class="thumbs" aria-label="Indikator salindia">
        @foreach ($hasil ? range(1, 9) : [1, 2, 3, 4, 5, '+4 lagi'] as $nomor)
            <li @if ($nomor === ($hasil ? 3 : 1)) aria-current="step" @endif>{{ $nomor }}</li>
        @endforeach
    </ol>
</section>
