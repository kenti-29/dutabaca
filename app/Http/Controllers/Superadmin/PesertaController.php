<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Administrasi;
use PDF; 
use App\Models\User;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrasis = Administrasi::with(['Penilaian','user'])->get();
        return view('pages.backend.superadmin.peserta.index', compact('administrasis'));
    }

    public function laporanpendaftar()
    {
         $administrasis = Administrasi::with(['Penilaian','user'])->get();
         $pdf = PDF::loadview('pages.backend.superadmin.peserta.laporanpendaftar', compact('administrasis'));
         return $pdf->stream('laporan-pendaftar.pdf');
    }
    public function laporanpeserta()
    {
         $administrasis = Administrasi::with(['Penilaian','user'])->where('status', 'lolos')->get();
         $pdf = PDF::loadview('pages.backend.superadmin.peserta.laporanpeserta', compact('administrasis'));
         return $pdf->stream('laporan-peserta.pdf');
    }
}
