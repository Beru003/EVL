@extends('layouts.evl')
@section('judul', 'Hasil Evaluasi')
@section('konten')
<main>
    <div class="bar">
        <div>
            <a href="{{ route('unggah') }}">
                ← Kembali ke Unggah
            </a>
            <h1>
                Pratinjau dan Hasil Evaluasi
            </h1>
            <p>
                Tinjau dokumen dan contoh informasi sensitif yang ditemukan.
            </p>
        </div>
        <div>
            <a class="button secondary" href="{{ route('pratinjau') }}">
                Evaluasi Ulang
            </a>
            <button class="button" disabled>
                Unduh Laporan
            </button>
        </div>
    </div>
    <div class="result">
        <x-dokumen hasil />
        <div>
            <section>
                <h2>
                    Ringkasan Risiko
                </h2>
                <div class="score">
                    <strong>
                        85,60
                        <small>
                            /100
                        </small>
                    </strong>
                    <div>
                        <p>
                            Kategori
                        </p>
                        <small>
                            ● Tinggi
                        </small>
                        <p>
                            Perlu ditinjau sebelum dibagikan.
                        </p>
                    </div>
                </div>
                <progress max="100" value="85.6">
                    85,60
                </progress>
                <p class="bar">
                    <span>
                        Rendah
                    </span>
                    <span>
                        Sedang
                    </span>
                    <span>
                        Tinggi
                    </span>
                </p>
            </section>
            <section>
                <h2>
                    Informasi Sensitif yang Ditemukan
                </h2>
                <table>
                    <thead>
                        <tr>
                            <th>
                                Jenis Informasi
                            </th>
                            <th>
                                Temuan
                            </th>
                            <th>
                                Lokasi
                            </th>
                            <th>
                                Tingkat
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                NIK
                            </td>
                            <td>
                                3273********0002
                            </td>
                            <td>
                                Salindia 3
                            </td>
                            <td>
                                Tinggi
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Posel
                            </td>
                            <td>
                                adi******@gmail.com
                            </td>
                            <td>
                                Salindia 5
                            </td>
                            <td>
                                Sedang
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nomor telepon
                            </td>
                            <td>
                                0812****7890
                            </td>
                            <td>
                                Salindia 7
                            </td>
                            <td>
                                Sedang
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    Data sensitif disamarkan untuk menjaga privasi.
                </p>
            </section>
            <section>
                <h2>
                    Rekomendasi
                </h2>
                <ol>
                    <li>
                        Hapus atau samarkan NIK pada salindia 3.
                    </li>
                    <li>
                        Gunakan posel institusi dan nomor yang tidak bersifat pribadi.
                    </li>
                    <li>
                        Tinjau ulang dokumen sebelum dibagikan kepada publik.
                    </li>
                </ol>
            </section>
        </div>
    </div>
</main>
@endsection
