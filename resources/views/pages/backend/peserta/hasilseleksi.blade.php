@extends('layouts.peserta')
@section('title')
Hasil Seleksi Peserta
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ url('dashboard-peserta') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Hasil Seleksi Peserta</h1>
    </div>
    @if ($administrasi->status == 'lolos')
    <div class="alert alert-success alert-has-icon">
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        <div class="alert-body">
            <div class="alert-title">Hallo {{Auth::user()->name}}</div>
            <div class="alert-title">Selamat Anda Lolos Tahap Seleksi Administrasi</div>
            Silahkan tunggu informasi selanjutnya.
        </div>
    </div>
    @endif
    @if ($administrasi->status == 'tidaklolos')
    <div class="alert alert-danger alert-has-icon">
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        <div class="alert-body">
            <div class="alert-title">Hallo {{Auth::user()->name}}</div>
            <div class="alert-title">Mohon Maaf Anda Tidak Lolos Tahap Seleksi Administrasi</div>
            Silahkan coba lagi tahun depan
        </div>
    </div>
    @endif
    @if ($administrasi->status == null)
    <div class="alert alert-secondary alert-has-icon">
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        <div class="alert-body">
            <div class="alert-title">Hallo {{Auth::user()->name}}</div>
            <div class="alert-title">Belum Ada Pengumuman</div>
            Silahkan cek lagi nanti
        </div>
    </div>
    @endif
</section>
@endsection