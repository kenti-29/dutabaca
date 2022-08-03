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
    public function index( Request $request)
    {
         if ($request->tahun) {
           $tahun=$request->tahun;
            $administrasis = Administrasi::with(['Penilaian', 'user'])->whereYear('created_at', $request->tahun)->get(); 
        }
        else {
            $tahun=date('Y');
            $administrasis = Administrasi::with(['Penilaian', 'user'])->whereYear('created_at', date('Y'))->get(); 
        }
        return view('pages.backend.superadmin.peserta.index', compact('administrasis', 'tahun'));
        
    }

    public function laporanpendaftar(Request $request)
    {
         $administrasis = Administrasi::with(['Penilaian','user'])->whereYear('created_at', $request->tahun)->get();
         $pdf = PDF::loadview('pages.backend.superadmin.peserta.laporanpendaftar', compact('administrasis'));
         return $pdf->stream('laporan-pendaftar.pdf');
    }
    public function laporanpeserta(Request $request)
    {
         $administrasis = Administrasi::with(['Penilaian','user'])->where('status', 'lolos')->whereYear('created_at', $request->tahun)->get();
         $pdf = PDF::loadview('pages.backend.superadmin.peserta.laporanpeserta', compact('administrasis'));
         return $pdf->stream('laporan-peserta.pdf');
    }
}
