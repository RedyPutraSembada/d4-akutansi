<?php

use App\Http\Controllers\Admin\AkademikAdminController;
use App\Http\Controllers\Admin\BeritaAcaraAdminController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\LayananAkademikAdminController;
use App\Http\Controllers\Admin\LulusanAdminController;
use App\Http\Controllers\Admin\ProfilAdminController;
use App\Http\Controllers\FormulirAkademikController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalPerkuliahanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\layananIjazahTranskipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\UjianSusulanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kurikulum', [KurikulumController::class, 'index'])->name('kurikulum');
Route::get('/jadwalPerkuliahan', [JadwalPerkuliahanController::class, 'index'])->name('jadwalPerkuliahan');
Route::get('/formulirAkademik', [FormulirAkademikController::class, 'index'])->name('formulirAkademik');
Route::get('/ujianSusulan', [UjianSusulanController::class, 'index'])->name('ujianSusulan');
Route::get('/layananIjazahTranskip', [layananIjazahTranskipController::class, 'index'])->name('layananIjazahTranskip');
Route::get('/profilLulusan', [ProfilLulusanController::class, 'index'])->name('profilLulusan');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::get('/dashboard', function () {
    return view('pages/admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Route::resource('/dashboard', [DashboardController::class]);
    //? Halaman Home
    Route::get('/halaman-home', [HomeAdminController::class, 'index'])->name('halaman-home');

    //* Bagian Hero
    Route::get('/create-hero', [HomeAdminController::class, 'createHero'])->name('create-hero');
    Route::post('/store-hero', [HomeAdminController::class, 'storeHero'])->name('store-hero');
    Route::get('/edit-hero/{id}', [HomeAdminController::class, 'editHero'])->name('edit-hero');
    Route::put('/update-hero/{id}', [HomeAdminController::class, 'updateHero'])->name('update-hero');
    Route::delete('/destroy-hero/{id}', [HomeAdminController::class, 'destroyHero'])->name('destroy-hero');

    //* Bagian Visi Dan Hero Vidio
    Route::get('/create-visi', [HomeAdminController::class, 'createVisi'])->name('create-visi');
    Route::post('/store-visi', [HomeAdminController::class, 'storeVisi'])->name('store-visi');
    Route::get('/edit-visi/{id}', [HomeAdminController::class, 'editVisi'])->name('edit-visi');
    Route::put('/update-visi/{id}', [HomeAdminController::class, 'updateVisi'])->name('update-visi');
    Route::delete('/destroy-visi/{id}', [HomeAdminController::class, 'destroyVisi'])->name('destroy-visi');

    //* Bagian Misi
    Route::get('/create-misi', [HomeAdminController::class, 'createMisi'])->name('create-misi');
    Route::post('/store-misi', [HomeAdminController::class, 'storeMisi'])->name('store-misi');
    Route::get('/edit-misi/{id}', [HomeAdminController::class, 'editMisi'])->name('edit-misi');
    Route::put('/update-misi/{id}', [HomeAdminController::class, 'updateMisi'])->name('update-misi');
    Route::delete('/destroy-misi/{id}', [HomeAdminController::class, 'destroyMisi'])->name('destroy-misi');

    //* Bagian Misi
    Route::get('/create-tujuan', [HomeAdminController::class, 'createTujuan'])->name('create-tujuan');
    Route::post('/store-tujuan', [HomeAdminController::class, 'storeTujuan'])->name('store-tujuan');
    Route::get('/edit-tujuan/{id}', [HomeAdminController::class, 'editTujuan'])->name('edit-tujuan');
    Route::put('/update-tujuan/{id}', [HomeAdminController::class, 'updateTujuan'])->name('update-tujuan');
    Route::delete('/destroy-tujuan/{id}', [HomeAdminController::class, 'destroyTujuan'])->name('destroy-tujuan');

    //* Bagian Image Slide Swipe
    Route::get('/create-slide-swipe', [HomeAdminController::class, 'createSlideSwipe'])->name('create-slide-swipe');
    Route::post('/store-slide-swipe', [HomeAdminController::class, 'storeSlideSwipe'])->name('store-slide-swipe');
    Route::get('/edit-slide-swipe/{id}', [HomeAdminController::class, 'editSlideSwipe'])->name('edit-slide-swipe');
    Route::put('/update-slide-swipe/{id}', [HomeAdminController::class, 'updateSlideSwipe'])->name('update-slide-swipe');
    Route::delete('/destroy-slide-swipe/{id}', [HomeAdminController::class, 'destroySlideSwipe'])->name('destroy-slide-swipe');

    //? Halaman Berita Acara
    Route::resource('/berita-acara', BeritaAcaraAdminController::class);

    //? Halaman Home
    Route::get('/halaman-profil', [ProfilAdminController::class, 'index'])->name('halaman-profil');

    //* Struktur Organisasi
    Route::get('/create-struktur', [ProfilAdminController::class, 'createStruktur'])->name('create-struktur');
    Route::post('/store-struktur', [ProfilAdminController::class, 'storeStruktur'])->name('store-struktur');
    Route::get('/edit-struktur/{id}', [ProfilAdminController::class, 'editStruktur'])->name('edit-struktur');
    Route::put('/update-struktur/{id}', [ProfilAdminController::class, 'updateStruktur'])->name('update-struktur');
    Route::delete('/destroy-struktur/{id}', [ProfilAdminController::class, 'destroyStruktur'])->name('destroy-struktur');

    //? Halaman Akademik
    Route::get('/halaman-akademik', [AkademikAdminController::class, 'index'])->name('halaman-akademik');

    //* Kurikulum
    Route::get('/create-kurikulum', [AkademikAdminController::class, 'createKurikulum'])->name('create-kurikulum');
    Route::post('/store-kurikulum', [AkademikAdminController::class, 'storeKurikulum'])->name('store-kurikulum');
    Route::get('/edit-kurikulum/{id}', [AkademikAdminController::class, 'editKurikulum'])->name('edit-kurikulum');
    Route::put('/update-kurikulum/{id}', [AkademikAdminController::class, 'updateKurikulum'])->name('update-kurikulum');
    Route::delete('/destroy-kurikulum/{id}', [AkademikAdminController::class, 'destroyKurikulum'])->name('destroy-kurikulum');

    //* Jadwal-Perkuliahan
    Route::get('/create-jadwal-perkuliahan', [AkademikAdminController::class, 'createJadwalPerkuliahan'])->name('create-jadwal-perkuliahan');
    Route::post('/store-jadwal-perkuliahan', [AkademikAdminController::class, 'storeJadwalPerkuliahan'])->name('store-jadwal-perkuliahan');
    Route::get('/edit-jadwal-perkuliahan/{id}', [AkademikAdminController::class, 'editJadwalPerkuliahan'])->name('edit-jadwal-perkuliahan');
    Route::put('/update-jadwal-perkuliahan/{id}', [AkademikAdminController::class, 'updateJadwalPerkuliahan'])->name('update-jadwal-perkuliahan');
    Route::delete('/destroy-jadwal-perkuliahan/{id}', [AkademikAdminController::class, 'destroyJadwalPerkuliahan'])->name('destroy-jadwal-perkuliahan');

    //* Ketetntuan Revisi
    Route::get('/create-ketentuan-revisi', [AkademikAdminController::class, 'createKetRevisi'])->name('create-ketentuan-revisi');
    Route::post('/store-ketentuan-revisi', [AkademikAdminController::class, 'storeKetRevisi'])->name('store-ketentuan-revisi');
    Route::get('/edit-ketentuan-revisi/{id}', [AkademikAdminController::class, 'editKetRevisi'])->name('edit-ketentuan-revisi');
    Route::put('/update-ketentuan-revisi/{id}', [AkademikAdminController::class, 'updateKetRevisi'])->name('update-ketentuan-revisi');
    Route::delete('/destroy-ketentuan-revisi/{id}', [AkademikAdminController::class, 'destroyKetRevisi'])->name('destroy-ketentuan-revisi');

    //* Tabel-Jadwal-Perkuliahan
    Route::get('/create-tabel-jadwal-perkuliahan', [AkademikAdminController::class, 'createTblJadwalPerkuliahan'])->name('create-tabel-jadwal-perkuliahan');
    Route::post('/store-tabel-jadwal-perkuliahan', [AkademikAdminController::class, 'storeTblJadwalPerkuliahan'])->name('store-tabel-jadwal-perkuliahan');
    Route::get('/edit-tabel-jadwal-perkuliahan/{id}', [AkademikAdminController::class, 'editTblJadwalPerkuliahan'])->name('edit-tabel-jadwal-perkuliahan');
    Route::put('/update-tabel-jadwal-perkuliahan/{id}', [AkademikAdminController::class, 'updateTblJadwalPerkuliahan'])->name('update-tabel-jadwal-perkuliahan');
    Route::delete('/destroy-tabel-jadwal-perkuliahan/{id}', [AkademikAdminController::class, 'destroyTblJadwalPerkuliahan'])->name('destroy-tabel-jadwal-perkuliahan');

    //* Formulir Akademik
    Route::get('/create-formulir-akademik', [AkademikAdminController::class, 'createFormulirAkademik'])->name('create-formulir-akademik');
    Route::post('/store-formulir-akademik', [AkademikAdminController::class, 'storeFormulirAkademik'])->name('store-formulir-akademik');
    Route::get('/edit-formulir-akademik/{id}', [AkademikAdminController::class, 'editFormulirAkademik'])->name('edit-formulir-akademik');
    Route::put('/update-formulir-akademik/{id}', [AkademikAdminController::class, 'updateFormulirAkademik'])->name('update-formulir-akademik');
    Route::delete('/destroy-formulir-akademik/{id}', [AkademikAdminController::class, 'destroyFormulirAkademik'])->name('destroy-formulir-akademik');

    //? Halaman Layanan Akademik
    Route::get('/halaman-layanan-akademik', [LayananAkademikAdminController::class, 'index'])->name('halaman-layanan-akademik');

    //* Ujian Susulan
    Route::get('/create-ujian-susulan', [LayananAkademikAdminController::class, 'createUjianSusulan'])->name('create-ujian-susulan');
    Route::post('/store-ujian-susulan', [LayananAkademikAdminController::class, 'storeUjianSusulan'])->name('store-ujian-susulan');
    Route::get('/edit-ujian-susulan/{id}', [LayananAkademikAdminController::class, 'editUjianSusulan'])->name('edit-ujian-susulan');
    Route::put('/update-ujian-susulan/{id}', [LayananAkademikAdminController::class, 'updateUjianSusulan'])->name('update-ujian-susulan');
    Route::delete('/destroy-ujian-susulan/{id}', [LayananAkademikAdminController::class, 'destroyUjianSusulan'])->name('destroy-ujian-susulan');

    //? Halaman Lulusan
    Route::get('/halaman-lulusan', [LulusanAdminController::class, 'index'])->name('halaman-lulusan');

    //* Ijazah Transkip Nilai
    Route::get('/create-ijazah-transkip-nilai', [LulusanAdminController::class, 'createIjazahTranskip'])->name('create-ijazah-transkip-nilai');
    Route::post('/store-ijazah-transkip-nilai', [LulusanAdminController::class, 'storeIjazahTranskip'])->name('store-ijazah-transkip-nilai');
    Route::get('/edit-ijazah-transkip-nilai/{id}', [LulusanAdminController::class, 'editIjazahTranskip'])->name('edit-ijazah-transkip-nilai');
    Route::put('/update-ijazah-transkip-nilai/{id}', [LulusanAdminController::class, 'updateIjazahTranskip'])->name('update-ijazah-transkip-nilai');
    Route::delete('/destroy-ijazah-transkip-nilai/{id}', [LulusanAdminController::class, 'destroyIjazahTranskip'])->name('destroy-ijazah-transkip-nilai');

    //* Profil Lulusan
    Route::get('/create-profil-lulusan', [LulusanAdminController::class, 'createProfilLulusan'])->name('create-profil-lulusan');
    Route::post('/store-profil-lulusan', [LulusanAdminController::class, 'storeProfilLulusan'])->name('store-profil-lulusan');
    Route::get('/edit-profil-lulusan/{id}', [LulusanAdminController::class, 'editProfilLulusan'])->name('edit-profil-lulusan');
    Route::put('/update-profil-lulusan/{id}', [LulusanAdminController::class, 'updateProfilLulusan'])->name('update-profil-lulusan');
    Route::delete('/destroy-profil-lulusan/{id}', [LulusanAdminController::class, 'destroyProfilLulusan'])->name('destroy-profil-lulusan');

    //* Tabel Profile Lulusan
    Route::get('/create-tabel-profil-lulusan', [LulusanAdminController::class, 'createTabelProfilLulusan'])->name('create-tabel-profil-lulusan');
    Route::post('/store-tabel-profil-lulusan', [LulusanAdminController::class, 'storeTabelProfilLulusan'])->name('store-tabel-profil-lulusan');
    Route::get('/edit-tabel-profil-lulusan/{id}', [LulusanAdminController::class, 'editTabelProfilLulusan'])->name('edit-tabel-profil-lulusan');
    Route::put('/update-tabel-profil-lulusan/{id}', [LulusanAdminController::class, 'updateTabelProfilLulusan'])->name('update-tabel-profil-lulusan');
    Route::delete('/destroy-tabel-profil-lulusan/{id}', [LulusanAdminController::class, 'destroyTabelProfilLulusan'])->name('destroy-tabel-profil-lulusan');

    //? Halaman Contact
    Route::get('/halaman-contact', [ContactAdminController::class, 'index'])->name('halaman-contact');

    //* Contact
    Route::get('/create-contact', [ContactAdminController::class, 'createContact'])->name('create-contact');
    Route::post('/store-contact', [ContactAdminController::class, 'storeContact'])->name('store-contact');
    Route::get('/edit-contact/{id}', [ContactAdminController::class, 'editContact'])->name('edit-contact');
    Route::put('/update-contact/{id}', [ContactAdminController::class, 'updateContact'])->name('update-contact');
    Route::delete('/destroy-contact/{id}', [ContactAdminController::class, 'destroyContact'])->name('destroy-contact');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
