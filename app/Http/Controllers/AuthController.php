<?php

namespace App\Http\Controllers;

use App\Mail\LupaPasswordEmail;
use App\Models\Administrasi;
use App\Models\Penilaian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login()
    {
    return view('pages.auth.login');
    }

    public function register()
    {
    return view('pages.auth.register');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role == 'ADMIN') {
                return redirect()->intended('dashboard-admin');
            } else if(Auth::user()->role == 'KEPALADINAS')  {
                return redirect()->intended('dashboard-superadmin');
            } else if(Auth::user()->role == 'JURI')  {
                return redirect()->intended('dashboard-juri');
            }
             else if(Auth::user()->role == 'PESERTA')  {
                return redirect()->intended('dashboard-peserta');
            }
        }

        return back()->withErrors([
            'username' => 'Username dan Password tidak cocok!',
        ]);
    }
    public function registration(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'name' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['role'] = 'PESERTA';
        $user=User::create($data);
        Administrasi::create(['peserta_id' => $user->id]);
        
        
        
        return redirect()->route('login')->with('status', 'Selamat Berhasil Mendaftar Akun Duta Baca, Silahkan login menggunakan akun username dan password yang sudah didaftarkan');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        $administrasi=Administrasi::where('peserta_id',$id)->first();
        Penilaian::where('administrasi_id',$administrasi->id)->delete();
        Administrasi::where('peserta_id',$id)->delete();
        return redirect()->route('management-users.index')->with('status', 'Berhasil  Menghapus User');
    }

    public function registrationadmin(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'name' => 'required',
            'no_hp' => 'required',

        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('management-user.index')->with('status', 'Berhasil Mendaftarkan Akun Duta Baca, Silahkan masuk menggunakan akun username dan password yang sudah didaftarkan');
    }
    public function lupapassword()
    {
        return view('pages.auth.lupapassword');
    }
    public function postlupapassword(Request $request)
    {
        $user=User::where('email',$request->email)->first();
        if ($user) {
            $passwordbaru=rand(10000,99999);
            $password=Hash::make($passwordbaru);
            $user->update(['password'=>$password]);
            Mail::to($request->email)->send(new LupaPasswordEmail($passwordbaru));
            return redirect()->route('lupapassword')->with('success','Password berhasil di riset, silahkan cek email anda');
        }
        else {
           return redirect()->route('lupapassword')->with('error','Email tidak ditemukan');
        }
    }
}
