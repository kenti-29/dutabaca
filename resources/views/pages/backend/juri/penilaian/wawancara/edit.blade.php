@extends('layouts.juri')
@section('title')
Edit Nilai
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{url('dashboard-juri')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Nilai</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Masukan Nilai</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('wawancara-juri.update', $id)}}" class="needs-validation"
                            novalidate="">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nilai</label>
                                <input id="nilai_wawancara" type="text" class="form-control" name="nilai_wawancara"
                                    value="{{$penilaian->nilai_wawancara}}" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Nilai!
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