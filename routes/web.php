<?php
use App\Http\Controllers\PrototipeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'evaluasi.unggah')->name('unggah');
Route::view('/pratinjau', 'evaluasi.pratinjau')->name('pratinjau');
Route::view('/hasil', 'evaluasi.hasil')->name('hasil');
Route::get('/riwayat', [PrototipeController::class, 'riwayat'])->name('riwayat');
Route::view('/masuk', 'autentikasi.masuk')->name('masuk');
Route::view('/daftar', 'autentikasi.daftar')->name('daftar');
Route::post('/masuk', [PrototipeController::class, 'masuk'])->name('masuk.demo');
Route::post('/keluar', [PrototipeController::class, 'keluar'])->name('keluar');
