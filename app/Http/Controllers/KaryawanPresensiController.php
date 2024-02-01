<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KaryawanPresensiController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // or any other route you want to redirect unauthenticated users to
        }

        $karyawan = Auth::user();

        // Get all presences for the authenticated user
        $presensiHistory = Presensi::where('id_karyawan', $karyawan->id)
            ->orderBy('tanggal', 'desc') // Assuming you want to show the latest presence first
            ->get();

        // Get the latest presence for today
        $presensiToday = $presensiHistory->firstWhere('tanggal', now()->toDateString());

        return view('karyawan.presensi.index', compact('presensiHistory', 'presensiToday'));
    }

    public function absenMasuk()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // or any other route you want to redirect unauthenticated users to
        }

        $karyawan = Auth::user();
        $currentDate = now()->toDateString();

        // Check if user has already made attendance today
        $existingPresensi = Presensi::where('id_karyawan', $karyawan->id)
            ->whereDate('tanggal', $currentDate)
            ->first();

        if ($existingPresensi) {
            return redirect()->route('karyawanPresensiIndex')->with('error', 'Anda sudah absen masuk hari ini.');
        }

        // Create new attendance record
        Presensi::create([
            'id_karyawan' => $karyawan->id,
            'tanggal' => $currentDate,
            'jam_masuk' => now()->toTimeString(),
        ]);

        return redirect()->route('karyawanPresensiIndex')->with('success', 'Absen masuk berhasil.');
    }

    public function absenKeluar()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // or any other route you want to redirect unauthenticated users to
        }

        $karyawan = Auth::user();
        $currentDate = now()->toDateString();

        // Find today's attendance record
        $presensi = Presensi::where('id_karyawan', $karyawan->id)
            ->whereDate('tanggal', $currentDate)
            ->first();

        if (!$presensi) {
            return redirect()->route('karyawanPresensiIndex')->with('error', 'Anda belum absen masuk hari ini.');
        }

        // Check if user has already made attendance out today
        if ($presensi->jam_pulang) {
            return redirect()->route('karyawanPresensiIndex')->with('error', 'Anda sudah absen keluar hari ini.');
        }

        // Update attendance record with check-out time
        $presensi->update([
            'jam_pulang' => now()->toTimeString(),
        ]);

        return redirect()->route('karyawanPresensiIndex')->with('success', 'Absen keluar berhasil.');
    }
}
