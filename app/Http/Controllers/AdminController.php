<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function index(Request $request)
    {
        echo "hallo dunia penuh arti";
        echo "<h1>" . Auth::user()->nama . "</h1>";
        echo "<a href='/logout'>Logout</a>";
    }

    function hrd(Request $request)
    {
        return view('hrd.index');
    }

    function karyawan(Request $request)
    {
        return  view('karyawan.index', [
            'data_karyawan' => \App\Models\Karyawan::all()
        ]);
    }

    function profil()
    {

        $posisi = Posisi::all();

        return view('karyawan.profil.index', [
            'posisi' => $posisi
        ]);
    }

    function editProfil()
    {
        // Ambil data pengguna yang sudah login
        $user = auth()->user();

        return view('karyawan.profil.edit', compact('user'));
    }

    // AdminController.php

    public function updateProfil(Request $request)
    {
        $user = auth()->user();

        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'nullable|date',
            'alamat' => 'nullable',
            'username' => 'required',
            'email' => 'required|email',
            'no_hp' => 'nullable',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk gambar
        ]);

        // Handle pengunggahan gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/gambar', $namaGambar);

            // Hapus gambar lama jika ada
            Storage::delete('public/gambar/' . $user->gambar);

            $user->update([
                'gambar' => $namaGambar,
            ]);
        }

        // Update bidang lainnya
        $user->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/profil')->with('success', 'Profil berhasil diperbarui');
    }
}
