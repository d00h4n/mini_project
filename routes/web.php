<?php


use App\Http\Controllers\karyawanController;
use App\Http\Controllers\posisiController;

use App\Http\Controllers\AdminController;
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
    Route::get('/app', [AdminController::class, 'index']);
    Route::get('/app/hrd', [AdminController::class, 'hrd'])->middleware('userAkses:admin');
    Route::get('/app/karyawan', [AdminController::class, 'karyawan'])->middleware('userAkses:karyawan');
    Route::get('/logout', [SesiController::class, 'logout']);
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

// Jika Anda ingin menyesuaikan route resource presensi di folder hrd
Route::namespace('hrd')->group(function () {
    Route::resource('presensi', 'PresensiController')->only(['presensiIndex']);
});