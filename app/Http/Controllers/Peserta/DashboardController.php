<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Administrasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $administrasi = Administrasi::where('peserta_id', Auth::user()->id)->first();
        return view('pages.backend.peserta.index', [
            'users' => User::count(),
            'peserta' => User::where('role', 'PESERTA')->count(),
            'administrasi' => $administrasi
        ]);
    }
    public function hasilseleksi()
    {
        $administrasi = Administrasi::where('peserta_id', Auth::user()->id)->first();
        return view('pages.backend.peserta.hasilseleksi', compact('administrasi'));
    }
}
