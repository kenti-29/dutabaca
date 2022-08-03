@extends('layouts.admin')
@section('title')
Dashboard
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{url('management-user')}}">
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
            <a href="{{url('nilai-peserta')}}">
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
        </div> --}}
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{url('beritas-admin')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Berita</h4>
                        </div>
                        <div class="card-body">
                            {{$berita}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{url('proker-admin')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Program Kerja</h4>
                        </div>
                        <div class="card-body">
                            {{$proker}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection