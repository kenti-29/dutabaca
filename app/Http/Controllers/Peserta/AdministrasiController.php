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
            'sk_domisili' => 'mimes:png,jpg,jpeg|max:1024',
            'ijazah' => 'mimes:png,jpg,jpeg|max:1024',
            'sk_sehat' => 'mimes:png,jpg,jpeg|max:1024',
            'kta' => 'mimes:png,jpg,jpeg|max:1024',

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
        if($request->hasFile('sk_domisili')) {
            $file = $request->file('sk_domisili');
            $fileName = 'sk_domisili_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/sk_domisili/', $fileName);
            $data['sk_domisili'] = $fileName;
        }
        if($request->hasFile('ijazah')) {
            $file = $request->file('ijazah');
            $fileName = 'ijazah_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/ijazah/', $fileName);
            $data['ijazah'] = $fileName;
        }
        if($request->hasFile('sk_sehat')) {
            $file = $request->file('sk_sehat');
            $fileName = 'sk_sehat_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/sk_sehat/', $fileName);
            $data['sk_sehat'] = $fileName;
        }
        if($request->hasFile('kta')) {
            $file = $request->file('kta');
            $fileName = 'kta_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/kta/', $fileName);
            $data['kta'] = $fileName;
        }
       

        Administrasi::where('peserta_id', $request->peserta_id)->update($data);

        return redirect()->route('administrasi-peserta.index')->with('status', 'Berhasil Menambahkan Administrasi');
    }

}
