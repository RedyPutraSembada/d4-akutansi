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
    Route::resource('/halaman-home', HomeAdminController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
