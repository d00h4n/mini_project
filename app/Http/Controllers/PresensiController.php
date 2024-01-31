<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{


public function index()
{
    $presences = Presensi::all();
    return view('presences.index', compact('presences'));
}

public function store(Request $request)
{
    $request->validate([
        'employee_id' => 'required|exists:employees,id',
        'date' => 'required|date',
        'clock_in' => 'required|date_format:H:i',
        'clock_out' => 'nullable|date_format:H:i|after:clock_in',
    ]);

    Presensi::create($request->all());

    return redirect()->route('presences.index')->with('success', 'Presensi berhasil ditambahkan!');
}

}
