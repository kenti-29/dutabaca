@extends('layouts.admin')
@section('title')
Proker
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{url('proker-admin')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Add Proker</h1>
        <div class="section-header-breadcrumb">
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Masukan Data Proker</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('proker-admin.store')}}" class="needs-validation"
                            novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input id="nama" type="text" class="form-control" name="nama" tabindex="1" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Nama Proker
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input id="deskripsi" type="text" class="form-control" name="deskripsi" tabindex="1"
                                    required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Deskripsi
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