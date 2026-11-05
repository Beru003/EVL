@props(['hasil' => false])
<section class="viewer">
    <div class="bar"><span>▤　Proposal Penelitian.pptx</span><small>Salindia {{ $hasil ? 3 : 1 }} / 9</small></div>
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
    <div class="thumbs" aria-label="Indikator salindia">
        @foreach ($hasil ? range(1, 9) : [1, 2, 3, 4, 5, '+4 lagi'] as $nomor)
            <small class="{{ $nomor === ($hasil ? 3 : 1) ? 'selected' : '' }}">{{ $nomor }}</small>
        @endforeach
    </div>
</section>
