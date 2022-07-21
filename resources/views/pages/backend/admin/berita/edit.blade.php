@extends('layouts.admin')
@section('title')
Berita
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{url('beritas-admin')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Berita</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Masukan Data Berita</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('beritas-admin.update', $berita->id)}}"
                            class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="password">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="{{ $berita->kategori }}">Pilih Kategori</option>
                                    <option value="umum">Umum</option>
                                    <option value="pendaftaran">Pendaftaran</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Judul</label>
                                <input id="judul" type="text" class="form-control" name="judul"
                                    value="{{ $berita->judul }}" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Judul
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Gambar</label>
                                <input type="file" id="gambar" name="gambar" value="{{ $berita->gambar }}"
                                    class="form-control">
                                <img src="{{ asset('images/berita/' . $berita->gambar) }}" alt="gambar" width="100">
                            </div>
                            <div class="form-group ">
                                <label>Dokumen</label>
                                <input type="file" id="dokumen" name="dokumen" value="{{ $berita->dokumen }}"
                                    class="form-control">
                                <a href="{{ asset('dokumen/' . $berita->dokumen) }}" target="_blank">View</a>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input id="deskripsi" type="text" class="form-control" name="deskripsi"
                                    value="{{ $berita->deskripsi }}" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Deskripsi
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input id="tanggal" type="date" class="form-control" name="tanggal"
                                    value="{{ $berita->tanggal}}" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Tanggal
                                </div>
                            </div>
                    </div>
                    <div class="card-footer text-left">
                        <button class="btn btn-primary">Add</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection