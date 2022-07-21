@extends('layouts.admin')
@section('title')
Administrasi Peserta
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ url('dashboard-admin') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Administrasi Peserta</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url('dashboard-admin')}}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{url('administrasis-peserta')}}">Administrasi Peserta</a></div>
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
                        <div class="clearfix mb-3"></div>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="home1" role="tabpanel"
                                aria-labelledby="home-tab1">
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
                                            <th>CV</th>
                                            <th>Foto Wajah</th>
                                            <th>Foto Full Body</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($administrasis as $administrasi)
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
                                                <td>{{ $administrasi->user->name }}</td>
                                                <td>{{ $administrasi->cv }}
                                                    <a href="{{ asset('images/cv/' . $administrasi->cv) }}"
                                                        target="_blank">View</a>
                                                </td>
                                                <td>{{ $administrasi->foto_wajah }} <a
                                                        href="{{ asset('images/foto_wajah/' . $administrasi->foto_wajah) }}"
                                                        target="_blank">View</a>

                                                </td>
                                                <td>{{ $administrasi->foto_body }} <a
                                                        href="{{ asset('images/foto_body/' . $administrasi->foto_body) }}"
                                                        target="_blank">View</a>

                                                </td>
                                                <td>{{ count($administrasi->Penilaian) ==0 ?
                                                    '0':$administrasi->Penilaian->sum('nilai_administrasi')
                                                    }}
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ route('nilai-peserta.edit', $administrasi->id) }}">Edit</a>
                                                </td>
                                                <td>
                                                    @if ($administrasi->status == 'lolos')
                                                    <div class="badge badge-success">
                                                        LOLOS
                                                    </div>
                                                    @elseif ($administrasi->status == 'tidaklolos')
                                                    <div class="badge badge-danger">
                                                        TIDAK LOLOS
                                                    </div>
                                                    @else
                                                    <div class="badge badge-secondary">
                                                        NO STATUS
                                                    </div>
                                                    @endif
                                                </td>
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