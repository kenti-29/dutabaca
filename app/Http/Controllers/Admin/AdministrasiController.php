<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Administrasi;
use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    public function index()
    {
        $administrasis = Administrasi::with(['user', 'Penilaian'])->get();
      
        return view('pages.backend.admin.peserta.administrasi.index', compact('administrasis'));
    }
}
