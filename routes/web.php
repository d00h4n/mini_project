<?php


use App\Http\Controllers\karyawanController;
use App\Http\Controllers\posisiController;

use App\Http\Controllers\AdminController;
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

Route::get('/posisi', [posisiController::class, 'index'])->name('posisiIndex');
Route::get('/posisi-create', [posisiController::class, 'create'])->name('posisiCreate');
Route::post('/posisi-create', [posisiController::class, 'store'])->name('posisiStore');
Route::get('/posisi-{posisi}-edit', [posisiController::class, 'edit'])->name('posisiEdit');
Route::post('/posisi-{posisi}-edit', [posisiController::class, 'update'])->name('posisiUpdate');
Route::get('/posisi-{posisi}-delete', [posisiController::class, 'destroy'])->name('posisiDelete');

Route::get('/karyawan', [karyawanController::class, 'index'])->name('karyawanIndex');
Route::get('/karyawan-create', [karyawanController::class, 'create'])->name('karyawanCreate');
Route::post('/karyawan-create', [karyawanController::class, 'store'])->name('karyawanStore');
Route::get('/karyawan-{karyawan}-edit', [karyawanController::class, 'edit'])->name('karyawanEdit');
Route::post('/karyawan-{karyawan}-edit', [karyawanController::class, 'update'])->name('karyawanUpdate');
Route::get('/karyawan-{karyawan}-delete', [karyawanController::class, 'destroy'])->name('karyawanDelete');
