@extends('layouts.peserta')
@section('title')
Dashboard Peserta
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard Peserta</h1>
    </div>
    @if ($administrasi->cv==null)
    <div class="alert alert-danger"> Silahkan lengkapi administrasi, untuk mengikuti seleksi Administrasi pada
        Pendaftaran Duta Baca Kbupaten Indramayu</div>
    @endif
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            {{-- <a href="{{url('management-user')}}"> --}}
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Peserta</h4>
                        </div>
                        <div class="card-body">
                            {{$peserta}}
                        </div>
                    </div>
                </div>
                {{--
            </a> --}}
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{url('hasilseleksi-peserta')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-lightbulb"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <h6>Cek Hasil Seleksi</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection