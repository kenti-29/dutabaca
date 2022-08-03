<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(Request $request)
    {
        if ($request->tahun) {
           $tahun=$request->tahun;
            $users = User::where('role', 'PESERTA')->whereYear('created_at', $request->tahun)->get(); 
        }
        else {
            $tahun=date('Y');
            $users = User::where('role', 'PESERTA')->whereYear('created_at', date('Y'))->get();
        }
        
        return view('pages.backend.admin.peserta.biodata.index', ['users'=>$users,'tahun'=>$tahun ]);
    }
}
