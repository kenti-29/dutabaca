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
        <h1>Add Berita</h1>
        <div class="section-header-breadcrumb">
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Masukan Data Berita</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('beritas-admin.store')}}" class="needs-validation"
                            novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="password">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <option value="umum">Umum</option>
                                    <option value="pendaftaran">Pendaftaran</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Judul</label>
                                <input id="judul" type="text" class="form-control" name="judul" tabindex="1" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Judul
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Gambar</label>
                                <input type="file" id="gambar" name="gambar" class="form-control">
                                {{-- <img src="{{ asset('images/berita/' . $berita->gambar) }}" alt="gambar"
                                    width="100"> --}}
                            </div>
                            <div class="form-group ">
                                <label>Dokumen Pendukung</label>
                                <input type="file" id="dokumen" name="dokumen" class="form-control">
                                {{-- <img src="{{ asset('images/berita/' . $berita->gambar) }}" alt="gambar"
                                    width="100"> --}}
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input id="deskripsi" type="text" class="form-control" name="deskripsi" tabindex="1"
                                    required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Deskripsi
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input id="tanggal" type="date" class="form-control" name="tanggal" tabindex="1"
                                    required autofocus>
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