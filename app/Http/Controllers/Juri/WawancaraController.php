<?php

namespace App\Http\Controllers\Juri;

use App\Http\Controllers\Controller;
use App\Models\Administrasi;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WawancaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrasis = Administrasi::with(['user','penilaian' => function ($q)
     {
        $q->where('juri_id', Auth::user()->id);
     }])->get();
        return view('pages.backend.juri.penilaian.wawancara.index', compact('administrasis')) ;
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
        //
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
         return view('pages.backend.juri.penilaian.wawancara.edit', compact('id'));
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
         $request->validate([
            'nilai_wawancara' => 'required'  
        ]);

        // cek kolom penilaian udah ditambahin belum
        $cek = Penilaian::where('administrasi_id', $id)->where('juri_id', Auth::user()->id)->count();

        // jika belum maka nambahin ini
        if ($cek == 0){
            Penilaian::create([
                'administrasi_id' => $id,
                'juri_id'=>Auth::user()->id,
                'nilai_wawancara'=> ($request->nilai_wawancara)
            ]);
            return redirect()->route('wawancara-juri.index')->with('status', 'Berhasil  Mengupdate Nilai');
        }

        // Jika ada maka mengubah yang udah ada
        Penilaian::where('administrasi_id', $id)->where('juri_id', Auth::user()->id)->update([
            'juri_id'=>Auth::user()->id,
            'nilai_wawancara'=> ($request->nilai_wawancara)
        ]);
        return redirect()->route('wawancara-juri.index')->with('status', 'Berhasil  Mengupdate Nilai');
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
