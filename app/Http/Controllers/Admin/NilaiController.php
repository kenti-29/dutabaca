<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Administrasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->tahun) {
           $tahun=$request->tahun;
            $administrasis = Administrasi::with(['Penilaian','user'])->whereYear('created_at', $request->tahun)->get(); 
        }
        else {
            $tahun=date('Y');
            $administrasis = Administrasi::with(['Penilaian','user'])->whereYear('created_at', date('Y'))->get();
        }
        
      
        return view('pages.backend.admin.peserta.nilai.index', compact('administrasis', 'tahun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $administrasi = Administrasi::where('peserta_id', Auth::user()->id)->first();
        return view('pages.backend.admin.peserta.administrasi.edit', compact('administrasi', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Administrasi::find($id)->update([
            'status'=>$request->status
        ]);
        return redirect('/administrasis-peserta');
    }
}
