<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\farmasiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Front\PendaftaranController;
use App\Http\Controllers\IndentitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\jadwal_dokterController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\rekammedisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FrontController::class, 'index']);
Route::get('/home', [FrontController::class, 'index'])->name('home.index');
Route::get('pendaftaran', [PendaftaranController::class,'pendaftaran'])->name('front.pendaftaran');
Route::resource('informasi', InformasiController::class);
Route::resource('kontak', KontakController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('kamar', KamarController::class);
Route::resource('farmasi', farmasiController::class);
Route::resource('rekammedis', rekammedisController::class);
Route::resource('jadwal_dokter', jadwal_dokterController::class);
Route::get('indentitas', [IndentitasController::class,'index'])->name('identitas.index');
Route::get('/sambutan', [IndentitasController::class, 'sambutan'])->name('identitas.sambutan');
Route::get('pendaftaran', [FrontController::class, 'pendaftaran'])->name('front.pendaftaran.pasien_daftar');
Route::post('pendaftaran/store', [FrontController::class, 'pendaftaran_store'])->name('front.pendaftaran.store');
Route::post('rekammedis/store', [FrontController::class, 'rekammedis_store'])->name('front.rekammedis');
