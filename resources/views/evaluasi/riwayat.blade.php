@extends('layouts.evl')
@section('judul', 'Riwayat Evaluasi')
@section('konten')
<div class="history riwayat-page">
    <aside>
        <h2 class="flex items-center gap-2.5">
            <img src="{{ asset('images/LOGO%20EVL.svg') }}" alt="" width="44" height="44" class="object-contain">
            EVALUASI RISIKO
        </h2>
        <p>
            Sistem Evaluasi Risiko Kebocoran Informasi
        </p>
        <nav aria-label="Navigasi riwayat">
            <a class="riwayat-aktif" href="{{ route('riwayat') }}" aria-current="page">
                Riwayat Evaluasi
            </a>
            <p>
                <a href="{{ route('unggah') }}">
                    ← Ke Halaman Utama
                </a>
            </p>
        </nav>
        <div class="riwayat-sidebar-bawah">
            <p>Contoh riwayat evaluasi</p>
            <form method="POST" action="{{ route('keluar') }}">
                @csrf
                <button class="button secondary" type="submit">Keluar</button>
            </form>
        </div>
    </aside>
    <main id="konten-utama">
        <p class="riwayat-lokasi">Ruang kerja / Riwayat Evaluasi</p>
        <div class="bar riwayat-judul">
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
            <div class="bar">
                <h2>Cari evaluasi</h2>
                <p>5 dokumen contoh</p>
            </div>
            <p class="filter-note">Filter belum tersedia pada prototipe ini.</p>
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
            <div class="bar">
                <h2>Daftar Evaluasi</h2>
                <p>Terbaru lebih dulu</p>
            </div>
            <div class="table-scroll" role="region" aria-label="Daftar evaluasi" tabindex="0">
            <table>
                <caption class="sr-only">Daftar lima contoh evaluasi dokumen, diurutkan dari yang terbaru</caption>
                <thead>
                    <tr>
                        <th scope="col">
                            No.
                        </th>
                        <th scope="col">
                            Nama Dokumen
                        </th>
                        <th scope="col">
                            Tanggal Unggah
                        </th>
                        <th scope="col">
                            Skor Risiko
                        </th>
                        <th scope="col">
                            Kategori
                        </th>
                        <th scope="col">
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
                                <p>{{ strtoupper(pathinfo($nama, PATHINFO_EXTENSION)) }} · Evaluasi selesai</p>
                            </td>
                            <td>
                                {{ $tanggal }} Mei 2024
                            </td>
                            <td>
                                {{ $skor }}
                            </td>
                            <td>
                                <small class="risiko-{{ strtolower($kategori) }}">
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
            </div>
            <p>
                Menampilkan 5 contoh evaluasi
            </p>
        </section>
    </main>
</div>
@endsection
