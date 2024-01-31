<?php

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
