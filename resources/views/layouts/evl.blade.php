<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') · EVL</title>
    @vite('resources/css/app.css')
</head>
<body @if (request()->routeIs('unggah')) class="halaman-unggah" @endif>
    @unless (request()->routeIs('masuk', 'daftar', 'riwayat'))
        <header class="bar">
            @if (request()->routeIs('unggah'))
                <a class="brand unggah-brand" href="{{ route('unggah') }}">
                    <img src="{{ asset('images/LOGO%20EVL.svg') }}" alt="" width="44" height="44" class="object-contain">
                    <span>
                        EVALUASI RISIKO
                        <span class="unggah-subtitle">Sistem Perlindungan Informasi</span>
                    </span>
                </a>
            @else
                <a class="brand inline-flex items-center gap-2.5" href="{{ route('unggah') }}">
                    <img src="{{ asset('images/LOGO%20EVL.svg') }}" alt="" width="44" height="44" class="object-contain">
                    EVALUASI RISIKO
                </a>
            @endif
            <nav aria-label="Navigasi utama">
                @unless (request()->routeIs('unggah'))
                    <a href="{{ route('unggah') }}">Unggah Dokumen</a>
                @endunless
                <a href="{{ route('riwayat') }}">Riwayat Evaluasi</a>
                @if (session('prototipe_masuk'))
                    <span class="avatar" aria-label="Pengguna demo">P</span>
                    <form method="POST" action="{{ route('keluar') }}">
                        @csrf
                        <button class="button secondary">Keluar</button>
                    </form>
                @else
                    <a class="button secondary" href="{{ route('masuk') }}">Masuk</a>
                @endif
            </nav>
        </header>
    @endunless
    @yield('konten')
    @unless (request()->routeIs('masuk', 'daftar'))
        <footer class="bar"><span>Sistem Evaluasi Risiko Kebocoran Informasi</span><span>Prototipe antarmuka</span></footer>
    @endunless
</body>
</html>
