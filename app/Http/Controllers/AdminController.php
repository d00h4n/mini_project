<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
