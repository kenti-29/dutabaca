<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Administrasi;
use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    public function index(Request $request)
    {
        
         if ($request->tahun) {
           $tahun=$request->tahun;
            $administrasis = Administrasi::with(['user', 'Penilaian'])->whereYear('created_at', $request->tahun)->get(); 
        }
        else {
            $tahun=date('Y');
            $administrasis = Administrasi::with(['user', 'Penilaian'])->whereYear('created_at', date('Y'))->get();
        }
        return view('pages.backend.admin.peserta.administrasi.index', compact(['administrasis', 'tahun']));
    }
}
