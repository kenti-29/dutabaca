@extends('layouts.superadmin')
@section('title')
Users
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Users</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url('dashboard-superadmin')}}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{url('user-superadmin')}}">Users</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                    aria-controls="home" aria-selected="true">Semua User<span
                                        class="badge badge-primary">{{$users->count()}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                                    aria-controls="profile" aria-selected="false">Admin<span
                                        class="badge badge-primary">{{$users->where('role',
                                        'ADMIN')->count()}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                    aria-controls="contact" aria-selected="false">Juri<span
                                        class="badge badge-primary">{{$users->where('role',
                                        'JURI')->count()}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                    aria-controls="contact" aria-selected="false">Kepala Dinas<span
                                        class="badge badge-primary">{{$users->where('role',
                                        'KEPALADINAS')->count()}}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-0">
                    @if (Session::get('status'))
                    <div class="alert alert-success alert-dismissible show fade mt-3">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            {{ Session::get('status') }}
                        </div>
                    </div>
                    @endif
                    <div class="card-body">

                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel"
                                aria-labelledby="home-tab3">
                                <div class="table-responsive">
                                    <table id="table-1" class="table table-striped">
                                        <thead>
                                            <th class="text-center pt-2">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>

                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Tanggal lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Role</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($users as $user)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input"
                                                            id="checkbox-{{$loop->iteration}}">
                                                        <label for="checkbox-{{$loop->iteration}}"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->tgl_lahir }}</td>
                                                <td>{{ $user->jenis_kelamin }}</td>
                                                <td>{{ $user->role }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                <div class="table-responsive">
                                    <table id="table-3" class="table table-striped">
                                        <thead>
                                            <th class="text-center pt-2">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>

                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Tanggal lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Role</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($users->where('role','ADMIN')->all() as $user)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input"
                                                            id="checkbox-{{$loop->iteration}}">
                                                        <label for="checkbox-{{$loop->iteration}}"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->tgl_lahir }}</td>
                                                <td>{{ $user->jenis_kelamin }}</td>
                                                <td>{{ $user->role }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                <div class="table-responsive">
                                    <table id="table-2" class="table table-striped">
                                        <thead>
                                            <th class="text-center pt-2">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>

                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Tanggal lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Role</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($users->where('role','JURI')->all() as $user)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input"
                                                            id="checkbox-{{$loop->iteration}}">
                                                        <label for="checkbox-{{$loop->iteration}}"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->tgl_lahir }}</td>
                                                <td>{{ $user->jenis_kelamin }}</td>
                                                <td>{{ $user->role }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                <div class="table-responsive">
                                    <table id="table-4" class="table table-striped">
                                        <thead>
                                            <th class="text-center pt-2">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>

                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Tanggal lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Role</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($users->where('role','KEPALADINAS')->all() as $user)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input"
                                                            id="checkbox-{{$loop->iteration}}">
                                                        <label for="checkbox-{{$loop->iteration}}"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->tgl_lahir }}</td>
                                                <td>{{ $user->jenis_kelamin }}</td>
                                                <td>{{ $user->role }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function name(params) {
            $('#table-1').DataTable();
            $('#table-2').DataTable();
            $('#table-3').DataTable();
            $('#table-4').DataTable();
        $("[data-checkboxes]").each(function() {
        var me = $(this),
        group = me.data('checkboxes'),
        role = me.data('checkbox-role');
        
        me.change(function() {
        var all = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'),
        checked = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"]):checked'),
        dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]'),
        total = all.length,
        checked_length = checked.length;
        
        if(role == 'dad') {
        if(me.is(':checked')) {
        all.prop('checked', true);
        }else{
        all.prop('checked', false);
        }
        }else{
        if(checked_length >= total) {
        dad.prop('checked', true);
        }else{
        dad.prop('checked', false);
        }
        }
        });
        });
    })
</script>
@endsection