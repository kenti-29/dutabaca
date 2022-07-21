<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.backend.admin.profile.index');
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
           'name' => 'required|max:255',
            'no_hp' => 'required|max:15',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'instansi' => 'required|max:75',
            'username' => 'required',
            'password' => 'required|max:15'
           
        ]);
        $cek = User::where('id', '!=', $id)->where('username', $request->username)->first();
        if ($cek){
            return redirect()->back()->with('status', 'Username sudah digunakan');
        }

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::findOrFail($id)->update($data);
        return redirect()->route('profile-admin.index')->with('status', 'Berhasil  Mengupdate Profile');
    }
}
