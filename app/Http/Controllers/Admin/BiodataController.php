<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'PESERTA')->get();
      
        return view('pages.backend.admin.peserta.biodata.index', ['users'=>$users]);
    }
}
