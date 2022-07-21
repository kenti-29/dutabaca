@extends('layouts.peserta')
@section('title')
Administrasi
@endsection

@section('css')

@endsection

@section('content')
<!-- Main Content -->
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ url('dashboard-peserta') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Administrasi</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ url('dashboard-peserta') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ url('administrasi-peserta') }}">Administrasi</a></div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{route('administrasi-peserta.store')}}" class="needs-validation" novalidate=""
        enctype="multipart/form-data">
        @csrf
        <input name="peserta_id" type="hidden" value="{{Auth::user()->id}}">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Masukan File</h4>
                        </div>
                        @if (Session::get('status'))
                        <div class="my-3 alert alert-success alert-dismissible fade show border-0 b-round" role="alert">
                            <strong>{{ Session::get('status') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label>CV</label>
                                <input type="file" id="cv" name="cv" class="form-control">
                                <a href="{{ asset('images/cv/' . $administrasi->cv) }}" target="_blank">Lihat File</a>
                            </div>
                            <div class="form-group ">
                                <label>Karya Tulis</label>
                                <input type="file" id="karya_tulis" name="karya_tulis" class="form-control">
                                <a href="{{ asset('images/karya_tulis/' . $administrasi->karya_tulis) }}"
                                    target="_blank">Lihat File</a>
                            </div>
                            <div class="form-group ">
                                <label>Foto Wajah</label>
                                <input type="file" id="foto_wajah" name="foto_wajah" class="form-control">
                                <img src="{{ asset('images/foto_wajah/' . $administrasi->foto_wajah) }}"
                                    alt="foto_wajah" width="100">
                            </div>
                            <div class="form-group ">
                                <label>Foto Body</label>
                                <input type="file" id="foto_body" name="foto_body" class="form-control">
                                <img src="{{ asset('images/foto_body/' . $administrasi->foto_body) }}" alt="foto_body"
                                    width="100">
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="card-footer text-left">
                                    <button class="btn btn-primary">Submit</button>
                                    <button class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection