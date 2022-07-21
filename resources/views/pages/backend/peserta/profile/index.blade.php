@extends('layouts.peserta')
@section('title')
Dashboard Peserta
@endsection

@section('css')

@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ url('dashboard-peserta') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url('dashboard-peserta')}}">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Hi, {{Auth::user()->name }}</h2>
        <p class="section-lead">
            Change information about yourself on this page.
        </p>


        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <form method="post" action="{{ route('profile-peserta.update', Auth::user()->id) }}"
                        class="needs-validation" novalidate="">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        @if (Session::get('status'))
                        <div class="my-3 alert alert-success alert-dismissible fade show border-0 b-round" role="alert">
                            <strong>{{ Session::get('status') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{Auth::user()->name }}"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control"
                                        value="{{Auth::user()->username }}" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Jenis Kelamin</label>
                                    <select type="text" name="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin"
                                        class="form-control">
                                        <option value="{{Auth::user()->jenis_kelamin }}">Pilih Jenis Kelamin</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{Auth::user()->email }}" required="">
                                    <div class="invalid-feedback">
                                        Masukan Email
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control"
                                        value="{{Auth::user()->tgl_lahir }}" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>No.HP</label>
                                    <input type="text" name="no_hp" class="form-control"
                                        value="{{Auth::user()->no_hp }}" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Instansi</label>
                                    <input type="text" name="instansi" class="form-control"
                                        value="{{Auth::user()->instansi }}" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" value="" required=""
                                        placeholder="Ketik ulang password">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection