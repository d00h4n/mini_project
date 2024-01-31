<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Posisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('hrd.karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posisi = Posisi::all();
        return view('hrd.karyawan.create', [
            'posisi' => $posisi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/karyawan', $gambar->hashName());


            Karyawan::create([
                'nama' => $request->nama,
                'id_posisi' => $request->id_posisi,
                'gambar' => $gambar->hashName(),
                'roles' => $request->roles,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'no_hp' => $request->no_hp,
                'tanggal_masuk' => $request->tanggal_masuk
            ]);
        } else {
            Karyawan::create([
                'nama' => $request->nama,
                'id_posisi' => $request->id_posisi,
                'roles' => $request->roles,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'no_hp' => $request->no_hp,
                'tanggal_masuk' => $request->tanggal_masuk
            ]);
        }


        //redirect to index
        return redirect(route('karyawanIndex'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $karyawan)
    {
        $posisi = Posisi::all();
        $karyawan = Karyawan::findOrFail($karyawan);
        return view('hrd.karyawan.edit', [
            'karyawan' => $karyawan,
            'posisi' => $posisi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $karyawan)
    {
        //validasi form
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //untuk mengambil ID Menu
        $karyawan = Karyawan::findOrFail($karyawan);

        //Cek apabila gambar akan di upload
        if ($request->hasFile('gambar')) {

            //upload gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/karyawan', $gambar->hashName());

            //hapus gambar lama
            Storage::delete('public/karyawan/' . $karyawan->gambar);

            //update menu dengan gambar baru
            $karyawan->update([
                'nama' => $request->nama,
                'id_posisi' => $request->id_posisi,
                'gambar' => $gambar->hashName(),
                'roles' => $request->roles,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'no_hp' => $request->no_hp,
                'tanggal_masuk' => $request->tanggal_masuk
            ]);
        } else {

            //update menu tanpa gambar
            $karyawan->update([
                'nama' => $request->nama,
                'id_posisi' => $request->id_posisi,
                'roles' => $request->roles,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'no_hp' => $request->no_hp,
                'tanggal_masuk' => $request->tanggal_masuk
            ]);
        }

        //mengarahkan ke halaman index menu
        return redirect(route('karyawanIndex'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $karyawan)
    {
        $karyawan = Karyawan::findOrFail($karyawan);
        $karyawan->delete();
        return redirect(route('karyawanIndex'));
    }
}
