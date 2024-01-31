<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class posisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $perPage = $request->input('per_page', 10);
        // $posisi = Posisi::paginate($perPage);

        $posisi = Posisi::all();

        return view('posisi.index', compact('posisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'n_posisi' => 'required|string|max:255',
        ]);

        // $posisi = new Posisi($validatedData);
        // $posisi->save();

        Posisi::create([
            'n_posisi' => $request->n_posisi,
            'deskrip' => $request->deskrip,
        ]);

        return redirect(route('posisiIndex'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Posisi $posisi)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $posisi)
    {
        $posisi = Posisi::findOrFail($posisi);
        return view('posisi.edit', compact('posisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $posisi)
    {
        $validatedData = validator($request->all(), [
            'n_posisi' => 'required|string|max:255'
        ])->validate();

        $posisi = Posisi::findOrFail($posisi);

        $posisi->update([
            'n_posisi' => $request->n_posisi,
            'deskrip'     => $request->deskrip
        ]);

        return redirect(route('posisiIndex'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $posisi)
    {
        $posisi = Posisi::findOrFail($posisi);
        $posisi->delete();

        return redirect(route('posisiIndex'))->with('success', 'Data Berhasil Di hapus');
    }
}
