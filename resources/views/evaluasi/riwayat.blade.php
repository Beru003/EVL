@extends('layouts.evl')
@section('judul', 'Riwayat Evaluasi')
@section('konten')
<div class="history">
    <aside>
        <h2>
            EVALUASI RISIKO
        </h2>
        <p>
            Sistem Evaluasi Risiko Kebocoran Informasi
        </p>
        <small>
            Riwayat Evaluasi
        </small>
        <p>
            <a href="{{ route('unggah') }}">
                ← Ke Halaman Utama
            </a>
        </p>
        <form method="POST" action="{{ route('keluar') }}" class="mt-8">
            @csrf
            <button class="button secondary">
                Keluar
            </button>
        </form>
    </aside>
    <main>
        <div class="bar">
            <div>
                <h1>
                    Riwayat Evaluasi
                </h1>
                <p>
                    Telusuri contoh hasil evaluasi dokumen.
                </p>
            </div>
            <a class="button" href="{{ route('unggah') }}">
                ＋ Ke Halaman Utama
            </a>
        </div>
        <section>
            <h2>
                Cari evaluasi
            </h2>
            <div class="filters">
                <label>
                    Nama dokumen
                    <input placeholder="Cari dokumen…" disabled>
                </label>
                <label>
                    Kategori risiko
                    <select disabled>
                        <option>
                            Semua Kategori
                        </option>
                    </select>
                </label>
                <label>
                    Tanggal unggah
                    <select disabled>
                        <option>
                            Semua Tanggal
                        </option>
                    </select>
                </label>
                <button class="button" disabled>
                    Saring
                </button>
            </div>
        </section>
        <section>
            <h2>
                Daftar Evaluasi
            </h2>
            <table>
                <thead>
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>
                            Nama Dokumen
                        </th>
                        <th>
                            Tanggal Unggah
                        </th>
                        <th>
                            Skor Risiko
                        </th>
                        <th>
                            Kategori
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([
                        ['Proposal Penelitian.pptx', '20', '85,60', 'Tinggi'],
                        ['Data Mahasiswa.pptx', '19', '62,30', 'Sedang'],
                        ['Laporan Keuangan.pdf', '18', '25,80', 'Rendah'],
                        ['Presentasi Seminar.pptx', '17', '78,50', 'Tinggi'],
                        ['Materi Kuliah.pdf', '16', '45,00', 'Sedang'],
                    ] as [$nama, $tanggal, $skor, $kategori])
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $nama }}
                            </td>
                            <td>
                                {{ $tanggal }} Mei 2024
                            </td>
                            <td>
                                {{ $skor }}
                            </td>
                            <td>
                                <small>
                                    {{ $kategori }}
                                </small>
                            </td>
                            <td>
                                @if ($loop->first)
                                    <a href="{{ route('hasil') }}">
                                        Lihat hasil
                                    </a>
                                @else
                                    —
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>
                Menampilkan 5 contoh evaluasi
            </p>
        </section>
    </main>
</div>
@endsection
