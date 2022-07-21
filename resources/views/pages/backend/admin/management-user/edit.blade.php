@extends('layouts.admin')
@section('title')
Edit User
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{url('management-user')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Edit User</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('management-user.update', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input id="name" type="text" class="form-control" value="{{ $user->name }}" name="name"
                                    placeholder="Masukan Nama User" tabindex="1" required>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input id="no_hp" type="text" class="form-control" value="{{ $user->no_hp }}"
                                    name="no_hp" placeholder="Masukan No Hp User" name="no_hp" id="no_hp" tabindex="1"
                                    required>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input id="tgl_lahir" type="text" class="form-control" name="tgl_lahir"
                                    value="{{ $user->tgl_lahir }}" name="tgl_lahir"
                                    placeholder="Masukan Tanggal Lahir User" tabindex="1" required>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="instansi">Instansi</label>
                                <input id="instansi" type="text" class="form-control" name="instansi"
                                    value="{{ $user->instansi }}" name="instansi" placeholder="Masukan Instansi"
                                    tabindex="1" required>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" class="form-control" name="username" tabindex="1"
                                    value="{{ $user->username }}" name="username" placeholder="Masukan Username User"
                                    required autofocus>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="text" class="form-control" name="password"
                                    value="{{ $user->name }}" name="password" placeholder="Masukan Password User"
                                    tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Role</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="">Pilih Role</option>
                                    <option value="ADMIN">Admin</option>
                                    {{-- <option value="SUPERADMIN">Super Admin</option> --}}
                                    <option value="JURI">Juri</option>
                                    {{-- <option value="PESERTA">Peserta</option> --}}
                                </select>
                            </div>
                    </div>
                    <div class="card-footer text-left">
                        <button class="btn btn-primary">Submit</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection