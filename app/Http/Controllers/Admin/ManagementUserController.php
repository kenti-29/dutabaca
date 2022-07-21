<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagementUserController extends Controller
{
     public function index()
    {
        $users = User::all();
        return view('pages.backend.admin.management-user.index', compact('users'));
    }
    public function create()
    {
        return view('pages.backend.admin.management-user.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'no_hp' => 'required|max:15',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'instansi' => 'required|max:75',
            'username' => 'required|unique:users,username',
            'password' => 'required|max:15',
            'role' => 'required'
        ]);

        $data = $request->all();
        $data['hak_akses']=$request->input('hak_akses');
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('management-user.index')->with('status', 'Berhasil Menambahkan User Baru');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('pages.backend.admin.management-user.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.backend.admin.management-user.edit', compact('user'));
    }
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
        return redirect()->route('management-user.index')->with('status', 'Berhasil  Mengupdate User');
    }

     public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('management-user.index')->with('status', 'Berhasil  Menghapus User');
    }
}
