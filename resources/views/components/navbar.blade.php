<header class="navbar">
    <a class="navbar-brand" href="{{ route('unggah') }}">
        <img src="{{ asset('images/LOGO%20EVL.svg') }}" alt="" width="44" height="44">
        <span>
            EVALUASI RISIKO
            <span class="navbar-subtitle">Sistem Perlindungan Informasi</span>
        </span>
    </a>

    <nav class="navbar-links" aria-label="Navigasi utama">
        @unless (request()->routeIs('unggah'))
            <a href="{{ route('unggah') }}">Unggah Dokumen</a>
        @endunless

        <a href="{{ route('riwayat') }}">Riwayat Evaluasi</a>

        @if (session('prototipe_masuk'))
            <span class="navbar-avatar" role="img" aria-label="Pengguna demo">P</span>
            <form method="POST" action="{{ route('keluar') }}">
                @csrf
                <button class="navbar-button" type="submit">Keluar</button>
            </form>
        @else
            <a class="navbar-button" href="{{ route('masuk') }}">Masuk</a>
        @endif
    </nav>
</header>
