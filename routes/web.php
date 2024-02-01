<?php


use App\Http\Controllers\karyawanController;
use App\Http\Controllers\posisiController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanPresensiController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SesiController;

use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/app');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/app', function () {
        $role = auth()->user()->roles;
        if ($role == 'admin') {
            return redirect('/app/hrd');
        } elseif ($role == 'karyawan') {
            return redirect('/app/karyawan');
        }
    });

    Route::get('/app/hrd', [AdminController::class, 'hrd'])->middleware('userAkses:admin');
    Route::get('/app/karyawan', [AdminController::class, 'karyawan'])->name('aksesKaryawanIndex')->middleware('userAkses:karyawan');
    Route::get('/edit-profil', [AdminController::class, 'editProfil'])->name('editProfil');
    Route::patch('/update-profil', [AdminController::class, 'updateProfil'])->name('updateProfil');

    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});

Route::prefix('posisi')->group(function () {
    Route::get('/', [posisiController::class, 'index'])->name('posisiIndex');
    Route::get('/create', [posisiController::class, 'create'])->name('posisiCreate');
    Route::post('/create', [posisiController::class, 'store'])->name('posisiStore');
    Route::get('/{posisi}/edit', [posisiController::class, 'edit'])->name('posisiEdit');
    Route::post('/{posisi}/edit', [posisiController::class, 'update'])->name('posisiUpdate');
    Route::get('/{posisi}/delete', [posisiController::class, 'destroy'])->name('posisiDelete');
});

Route::prefix('karyawan')->group(function () {
    Route::get('/', [karyawanController::class, 'index'])->name('karyawanIndex');
    Route::get('/create', [karyawanController::class, 'create'])->name('karyawanCreate');
    Route::post('/create', [karyawanController::class, 'store'])->name('karyawanStore');
    Route::get('/{karyawan}/edit', [karyawanController::class, 'edit'])->name('karyawanEdit');
    Route::post('/{karyawan}/edit', [karyawanController::class, 'update'])->name('karyawanUpdate');
    Route::get('/{karyawan}/delete', [karyawanController::class, 'destroy'])->name('karyawanDelete');

    Route::resource('presensi', PresensiController::class)->only(['index']);
});

// profile karyawan
// Route::get('/edit-profil', [AdminController::class, 'editProfil'])->name('editProfil');
// Route::get('/update-profil', [AdminController::class, 'updateProfil'])->name('updateProfil');
Route::get('/profil', [AdminController::class, 'profil'])->name('profil');

// ADMIN View presensi
Route::get('/presensi', [PresensiController::class, 'index'])->name('presensiShow');

//User View Presensi
Route::get('karyawan_presensi', [KaryawanPresensiController::class, 'index'])->name('karyawanPresensi');


Route::middleware(['auth', 'userAkses:karyawan'])->group(function () {
    Route::get('/karyawan-presensi', [KaryawanPresensiController::class, 'index'])->name('karyawanPresensiIndex');
    Route::post('/absen-masuk', [KaryawanPresensiController::class, 'absenMasuk'])->name('absenMasuk');
    Route::post('/absen-keluar', [KaryawanPresensiController::class, 'absenKeluar'])->name('absenKeluar');
});
