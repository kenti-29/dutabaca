@extends('layouts.admin')
@section('title')
Biodata Peserta
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ url('dashboard-admin') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Biodata Peserta</h1>
        <div class="section-header-button">
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url('dashboard-admin')}}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{url('biodata-peserta')}}">Biodata Peserta</a></div>
        </div>
    </div>
    <div class="section-body">
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
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-3">
                                    <select name="tahun" class="form-control" id="">
                                        @for ($i = date('Y'); $i >= 2021; $i--)
                                        <option value="{{$i}}" {{ $tahun==$i ? 'selected' :''}}>
                                            {{$i}}
                                        </option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary">
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix mb-3"></div>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="home1" role="tabpanel"
                                aria-labelledby="home-tab1">
                                <div class="table-responsive">
                                    <table id="table-1" class="table table-striped">
                                        <thead>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Tanggal lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No. HP</th>
                                            <th>Instansi</th>
                                            <th>Tahun</th>
                                            </tr>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->tgl_lahir }}</td>
                                                <td>{{ $user->jenis_kelamin }}</td>
                                                <td>{{ $user->no_hp }}</td>
                                                <td>{{ $user->instansi }}</td>
                                                <td>{{ Carbon\Carbon::parse($user->created_at)->format('Y') }}</td>
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