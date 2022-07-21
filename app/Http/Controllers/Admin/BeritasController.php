<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('pages.backend.admin.berita.index', ['beritas'=>$berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $berita=Berita::find($id);
        return view('pages.backend.admin.berita.create');
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
            'judul' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required'
            
        ]);

        $berita = $request->all();
       ($request->password);
        if($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = 'gambar_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/berita', $fileName);
            $berita['gambar'] = $fileName;
        }
        if($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $fileName = 'dokumen_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('dokumen', $fileName);
            $berita['dokumen'] = $fileName;
        }
        Berita::create($berita);

        return redirect()->route('beritas-admin.index')->with('status', 'Berhasil Menambahkan Berita Baru');
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
       $berita=Berita::find($id);
        return view('pages.backend.admin.berita.edit', compact('id','berita'));
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
           'kategori' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required'
           
        ]);
        
        if($request->hasFile('gambar')) {
            $data = $request->all();
            $file = $request->file('gambar');
            $fileName = 'gambar_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('images/berita/', $fileName);
            $data['gambar'] = $fileName;
        }
        else {
            $data = $request->except('gambar');
        }
        if($request->hasFile('dokumen')) {
            $data = $request->all();
            $file = $request->file('dokumen');
            $fileName = 'dokumen_' . uniqid() . '_' . date("Ymd") . 
            '.'. $file->getClientOriginalExtension();
            $file->move('dokumen/', $fileName);
            $data['dokumen'] = $fileName;
        }
        else {
            $data = $request->except('dokumen');
        }
        
        Berita::find($id)->update($data);

        return redirect()->route('beritas-admin.index')->with('status', 'Berhasil Mengupdate Data Berita');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::findOrFail($id)->delete();
        return redirect()->route('beritas-admin.index')->with('status', 'Berhasil  Menghapus Berita');
    }
}
