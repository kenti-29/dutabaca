<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Proker;
use App\Models\Tentang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $berita=Berita::get();
        $proker=Proker::get();
        return view('pages.frontend.home', [
            'beritas' => $berita,
            'prokers' => $proker,

        ]);
    }

    public function proker()
    {
        $proker=Proker::get();
        return view('pages.frontend.proker', [
            'prokers' => $proker,

        ]);
    }

    public function show($id)
    {
        $berita=Berita::find($id);
        return view('pages.frontend.show', [
            'berita' => $berita,

        ]);
    }
}
