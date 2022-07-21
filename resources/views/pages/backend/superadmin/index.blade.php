@extends('layouts.superadmin')
@section('title')
Dashboard Kepala Dinas
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard Kepala Dinas</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('user-superadmin') }}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total User</h4>
                        </div>
                        <div class="card-body">
                            {{$users}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('peserta-superadmin') }}">
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
            </a>
        </div>
        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('juri-superadmin') }}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Juri</h4>
                        </div>
                        <div class="card-body">
                            {{$juri}}
                        </div>
                    </div>
                </div>
            </a>
        </div> --}}
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{url('/')}}#berita">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Berita</h4>
                        </div>
                        <div class="card-body">
                            {{$berita}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection