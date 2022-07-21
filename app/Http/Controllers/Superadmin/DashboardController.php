<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        return view('pages.backend.superadmin.index', [
            'users' => User::count(),
            'superadmin' => User::where('role', 'SUPERADMIN')->count(),
            'juri' => User::where('role', 'JURI')->count(),
            'peserta' => User::where('role', 'PESERTA')->count(),
            'berita' =>Berita::count()
        ]);
    }
    
}
