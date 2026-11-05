<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrototipeController extends Controller
{
    public function riwayat(Request $request): View|RedirectResponse
    {
        return $request->session()->get('prototipe_masuk')
            ? view('evaluasi.riwayat')
            : redirect()->route('masuk');
    }

    public function masuk(Request $request): RedirectResponse
    {
        $request->session()->put('prototipe_masuk', true);
        $request->session()->regenerate();

        return redirect()->route('unggah');
    }

    public function keluar(Request $request): RedirectResponse
    {
        $request->session()->forget('prototipe_masuk');
        $request->session()->regenerate();

        return redirect()->route('unggah');
    }
}
