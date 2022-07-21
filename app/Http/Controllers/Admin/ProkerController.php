<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proker = Proker::all();
        return view('pages.backend.admin.proker.index', ['prokers'=>$proker]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.admin.proker.create');
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
            'nama' => 'required',
            'deskripsi' => 'required',
            
            
        ]);
        $proker= $request->all();
        Proker::create($proker);

        return redirect()->route('proker-admin.index')->with('status', 'Berhasil Menambahkan Proker Baru');
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
        $proker=Proker::find($id);
        return view('pages.backend.admin.proker.edit', compact('id','proker'));
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
            'nama' => 'required',
            'deskripsi' => 'required'
            
        ]);
        $data = $request->all();
        Proker::find($id)->update($data);
        return redirect()->route('proker-admin.index')->with('status', 'Berhasil Mengupdate Proker Baru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proker::findOrFail($id)->delete();
        return redirect()->route('proker-admin.index')->with('status', 'Berhasil  Menghapus Proker');
    }
}
