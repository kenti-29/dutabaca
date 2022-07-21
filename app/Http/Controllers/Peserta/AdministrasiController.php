<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Administrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrasi = Administrasi::where('peserta_id', Auth::user()->id)->first();
        return view('pages.backend.peserta.administrasi.index', compact('administrasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'mimes:pdf,doc|max:1024',
            'karya_tulis' => 'mimes:pdf,doc|max:1024',
            'foto_wajah' => 'mimes:png,jpg,jpeg|max:1024',
            'foto_body' => 'mimes:png,jpg,jpeg|max:1024',
        ]);
        if($request->hasFile('cv')) {
            $file = $request->file('cv');
            $fileName = 'cv_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/cv/', $fileName);
            $data['cv'] = $fileName;
        }
        if($request->hasFile('karya_tulis')) {
            $file = $request->file('karya_tulis');
            $fileName = 'karya_tulis_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/karya_tulis/', $fileName);
            $data['karya_tulis'] = $fileName;
        }
        if($request->hasFile('foto_wajah')) {
            $file = $request->file('foto_wajah');
            $fileName = 'foto_wajah_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/foto_wajah/', $fileName);
            $data['foto_wajah'] = $fileName;
        }
        if($request->hasFile('foto_body')) {
            $file = $request->file('foto_body');
            $fileName = 'foto_body_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/foto_body/', $fileName);
            $data['foto_body'] = $fileName;
        }
       

        Administrasi::where('peserta_id', $request->peserta_id)->update($data);

        return redirect()->route('administrasi-peserta.index')->with('status', 'Berhasil Menambahkan Administrasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}