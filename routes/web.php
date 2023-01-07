<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeAdminController;
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
    //* GET
    Route::get('/halaman-home', [HomeAdminController::class, 'index'])->name('halaman-home');
    Route::get('/create-hero', [HomeAdminController::class, 'createHero'])->name('create-hero');
    Route::get('/edit-hero/{id}', [HomeAdminController::class, 'editHero'])->name('edit-hero');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //* POST
    Route::post('/store-hero', [HomeAdminController::class, 'storeHero'])->name('store-hero');
    //* PUT
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/update-hero/{id}', [HomeAdminController::class, 'updateHero'])->name('update-hero');
    //* DELETE
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/destroy-hero/{id}', [HomeAdminController::class, 'destroyHero'])->name('destroy-hero');
});

require __DIR__ . '/auth.php';
