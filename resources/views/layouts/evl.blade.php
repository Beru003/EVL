<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') · EVL</title>
    @vite('resources/css/app.css')
</head>
<body @if (request()->routeIs('unggah')) class="halaman-unggah" @endif>
    @yield('navbar')
    @yield('konten')
    @unless (request()->routeIs('masuk', 'daftar'))
        <footer class="bar"><span>Sistem Evaluasi Risiko Kebocoran Informasi</span><span>Prototipe antarmuka</span></footer>
    @endunless
</body>
</html>
