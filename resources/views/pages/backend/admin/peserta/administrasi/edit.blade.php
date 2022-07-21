@extends('layouts.admin')
@section('title')
Nilai Peserta
@endsection

@section('css')

@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{url ('nilai-peserta')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Nilai</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url ('dashboard-admin')}}">Dashboard</a></div>
            <div class="breadcrumb-item">Edit Nilai</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Masukan Nilai</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('nilai-peserta.update', $id)}}" class="needs-validation"
                            novalidate="">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="password">Pilih Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="lolos">Lolos</option>
                                    <option value="tidaklolos">Tidak Lolos</option>
                                </select>
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