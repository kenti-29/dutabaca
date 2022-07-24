@extends('layouts.admin')
@section('title')
Management Users
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{url('/management-user')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Add User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Add User</div>
        </div>
    </div>

    <div class="section-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Masukan Data User</h4>
                    </div>
                    <form method="POST" action="{{route('registrationadmin')}}" class="needs-validation" novalidate="">
                        <div class="card-body">

                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input id="name" type="text" class="form-control" name="name" tabindex="1" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Nama Lengkap!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input id="no_hp" type="text" class="form-control" name="no_hp" tabindex="1" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Nomor HP!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" tabindex="1"
                                    required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Tanggal Lahir!
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
                                <input id="instansi" type="text" class="form-control" name="instansi" tabindex="1"
                                    required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Instansi!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="text" class="form-control" name="email" tabindex="1" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan email!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" class="form-control" name="username" tabindex="1"
                                    required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Username!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="text" class="form-control" name="password" tabindex="1"
                                    required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan Masukan Password!
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
                            {{-- <div class="form-group">
                                <label for="password">Hak Akses</label>
                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                    <input type="checkbox" value="Administrasi" data-checkboxes="mygroup"
                                        data-checkbox-role="dad" class="custom-control-input" name="hak_akses[]"
                                        id="administrasi">
                                    <label for="administrasi" class="custom-control-label">Administrasi</label>
                                </div>
                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                    <input type="checkbox" value="Tes Tulis" data-checkboxes="mygroup"
                                        data-checkbox-role="dad" class="custom-control-input" name="hak_akses[]"
                                        id="testulis">
                                    <label for="testulis" class="custom-control-label">Tes Tulis</label>
                                </div>
                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                    <input type="checkbox" value="Wawancara" data-checkboxes="mygroup"
                                        data-checkbox-role="dad" class="custom-control-input" name="hak_akses[]"
                                        id="wawancara">
                                    <label for="wawancara" class="custom-control-label">Wawancara</label>
                                </div>
                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                    <input type="checkbox" value="Karantina" data-checkboxes="mygroup"
                                        data-checkbox-role="dad" class="custom-control-input" name="hak_akses[]"
                                        id="karantina">
                                    <label for="karantina" class="custom-control-label">Karantina</label>
                                </div>
                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                    <input type="checkbox" value="Tanya Jawab" data-checkboxes="mygroup"
                                        data-checkbox-role="dad" class="custom-control-input" name="hak_akses[]"
                                        id="speech">
                                    <label for="speech" class="custom-control-label">Speech</label>
                                </div>
                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                    <input type="checkbox" value="Tanya Jawab" data-checkboxes="mygroup"
                                        data-checkbox-role="dad" class="custom-control-input" name="hak_akses[]"
                                        id="tanyajawab">
                                    <label for="tanyajawab" class="custom-control-label">Tanya Jawab</label>
                                </div>

                            </div> --}}
                        </div>
                        <div class="card-footer text-left">
                            <button class="btn btn-primary">Add</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection