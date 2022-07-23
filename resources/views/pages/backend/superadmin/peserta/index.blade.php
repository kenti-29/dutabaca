@extends('layouts.superadmin')
@section('title')
Peserta
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-button">
            <div class="float-left">
                <a class="btn btn-success" href="{{url('/laporanpendaftar-superadmin')}}" target="_blank">Export Laporan
                    Semua
                    Pendaftar</a>
            </div>
            <div class="float-left ml-2">
                <a class="btn btn-success" href="{{url('/laporanpeserta-superadmin')}}" target="_blank">Export Laporan
                    Peserta Lolos
                </a>
            </div>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url('dashboard-superadmin')}}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{url('peserta-superadmin')}}">Peserta</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab"
                                    aria-controls="home" aria-selected="true">Semua Peserta<span
                                        class="badge badge-primary"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab2" data-toggle="tab" href="#home2" role="tab"
                                    aria-controls="home" aria-selected="true">Lolos<span
                                        class="badge badge-primary">{{$administrasis->where('status',
                                        'lolos')->count()}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                    aria-controls="home" aria-selected="true">Tidak Lolos<span
                                        class="badge badge-primary">{{$administrasis->where('status',
                                        'tidaklolos')->count()}}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Administrasi</th>
                                            <th>Tes</th>
                                            <th>Wawancara</th>
                                            <th>Sikap</th>
                                            <th>Speech</th>
                                            <th>Tanya Jawab</th>
                                            <th>Total Nilai</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($administrasis as $administrasi)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $administrasi->user->name }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_administrasi') }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_testulis') }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_wawancara')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_karantina')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_speech')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_tanyajawab')}}</td>
                                                <td>{{$administrasi->Penilaian->sum('nilai_administrasi') +
                                                    $administrasi->Penilaian->sum('nilai_testulis') +
                                                    $administrasi->Penilaian->sum('nilai_wawancara') +
                                                    $administrasi->Penilaian->sum('nilai_karantina') +
                                                    $administrasi->Penilaian->sum('nilai_speech') +
                                                    $administrasi->Penilaian->sum('nilai_tanyajawab')}}</td>
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
                            <div class="tab-pane" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                                <div class="table-responsive">
                                    <table id="table-2" class="table table-striped">
                                        <thead>
                                            <th>No</th>

                                            <th>Nama</th>
                                            <th>Administrasi</th>
                                            <th>Tes</th>
                                            <th>Wawancara</th>
                                            <th>Karantina</th>
                                            <th>Speech</th>
                                            <th>Tanya Jawab</th>
                                            <th>Total Nilai</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($administrasis->where('status', 'lolos')->all() as $administrasi)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $administrasi->user->name }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_administrasi') }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_testulis') }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_wawancara')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_karantina')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_speech')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_tanyajawab')}}</td>
                                                <td>{{$administrasi->Penilaian->sum('nilai_administrasi') +
                                                    $administrasi->Penilaian->sum('nilai_testulis') +
                                                    $administrasi->Penilaian->sum('nilai_wawancara') +
                                                    $administrasi->Penilaian->sum('nilai_karantina') +
                                                    $administrasi->Penilaian->sum('nilai_speech') +
                                                    $administrasi->Penilaian->sum('nilai_tanyajawab')}}</td>
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
                            <div class="tab-pane" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                                <div class="table-responsive">
                                    <table id="table-3" class="table table-striped">
                                        <thead>
                                            <th>No</th>

                                            <th>Nama</th>
                                            <th>Administrasi</th>
                                            <th>Tes</th>
                                            <th>Wawancara</th>
                                            <th>Karantina</th>
                                            <th>Speech</th>
                                            <th>Tanya Jawab</th>
                                            <th>Total Nilai</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($administrasis->where('status', 'tidaklolos')->all() as
                                            $administrasi)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $administrasi->user->name }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_administrasi') }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_testulis') }}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_wawancara')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_karantina')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_speech')}}</td>
                                                <td>{{ $administrasi->Penilaian->sum('nilai_tanyajawab')}}</td>
                                                <td>{{$administrasi->Penilaian->sum('nilai_administrasi') +
                                                    $administrasi->Penilaian->sum('nilai_testulis') +
                                                    $administrasi->Penilaian->sum('nilai_wawancara') +
                                                    $administrasi->Penilaian->sum('nilai_karantina') +
                                                    $administrasi->Penilaian->sum('nilai_speech') +
                                                    $administrasi->Penilaian->sum('nilai_tanyajawab')}}</td>
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