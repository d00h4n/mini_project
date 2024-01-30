<?php

use App\Http\Controllers\karyawanController;
use App\Http\Controllers\posisiController;
use App\Models\Posisi;
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

Route::get('/', function () {
    return view('welcome');
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
