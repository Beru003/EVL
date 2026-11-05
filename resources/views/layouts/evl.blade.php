<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') · EVL</title>
    @vite('resources/css/app.css')
</head>
<body>
    @unless (request()->routeIs('masuk', 'daftar', 'riwayat'))
        <header class="bar">
            <a class="brand" href="{{ route('unggah') }}">✓　EVALUASI RISIKO</a>
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
    <footer class="bar"><span>Sistem Evaluasi Risiko Kebocoran Informasi</span><span>Prototipe antarmuka</span></footer>
</body>
</html>
