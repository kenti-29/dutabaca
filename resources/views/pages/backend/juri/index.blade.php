@extends('layouts.juri')
@section('title')
Dashboard Juri
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard Juri</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('peserta-juri') }}">
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
    </div>
</section>
@endsection