@extends('layouts.admin')
@section('title')
Berita
@endsection

@section('css')

@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ url('dashboard-admin') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Berita</h1>
        <div class="section-header-button">
            <a href="{{ route('beritas-admin.create') }}" class="btn btn-primary">Add Berita</a>

        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ url('dashboard-admin') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ url('beritas-admin') }}">Berita</a></div>
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
                                    aria-controls="home" aria-selected="true">Semua Berita<span
                                        class="badge badge-primary">{{$beritas->count()}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab2" data-toggle="tab" href="#home2" role="tab"
                                    aria-controls="home" aria-selected="true">Umum<span
                                        class="badge badge-primary">{{$beritas->where('kategori',
                                        'umum')->count()}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                    aria-controls="home" aria-selected="true">Pendaftaran<span
                                        class="badge badge-primary">{{$beritas->where('kategori',
                                        'pendaftaran')->count()}}</span></a>
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
                                            <th class="text-center pt-2">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>

                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            {{-- <th>Deskripsi</th> --}}
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($beritas as $berita)
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
                                                <td>{{ $berita->kategori }}</td>
                                                <td>{{ $berita->judul }}</td>
                                                <td><img width="50" height="50"
                                                        src="{{ asset('images/berita/' . $berita->gambar) }}" alt="">
                                                </td>
                                                {{-- <td>{{ $berita->deskripsi }}</td> --}}
                                                <td>{{ $berita->tanggal }}</td>
                                                <td>
                                                    <a href="{{ route('beritas-admin.edit', $berita->id) }}"
                                                        class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>


                                                    <form class="btn btn-icon btn-danger"
                                                        action="{{ route('beritas-admin.destroy', $berita->id) }}"
                                                        method="POST" onsubmit="return confirm('Apakah Anda Yakin?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" title="Hapus"
                                                            class="btn btn-danger btn-sm"><i class="fas fa-times"></i>
                                                        </button>
                                                    </form>
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
                                            <th class="text-center pt-2">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>

                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            {{-- <th>Deskripsi</th> --}}
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($beritas->where('kategori', 'umum')->all() as $berita)
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
                                                <td>{{ $berita->kategori }}</td>
                                                <td>{{ $berita->judul }}</td>
                                                <td><img width="50" height="50"
                                                        src="{{ asset('images/berita/' . $berita->gambar) }}" alt="">
                                                </td>
                                                {{-- <td>{{ $berita->deskripsi }}</td> --}}
                                                <td>{{ $berita->tanggal }}</td>
                                                <td>
                                                    <a href="{{ route('beritas-admin.edit', $berita->id) }}"
                                                        class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>


                                                    <form class="btn btn-icon btn-danger"
                                                        action="{{ route('beritas-admin.destroy', $berita->id) }}"
                                                        method="POST" onsubmit="return confirm('Apakah Anda Yakin?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" title="Hapus"
                                                            class="btn btn-danger btn-sm"><i class="fas fa-times"></i>
                                                        </button>
                                                    </form>
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
                                            <th class="text-center pt-2">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>

                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            {{-- <th>Deskripsi</th> --}}
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach ($beritas->where('kategori', 'pendaftaran')->all() as $berita)
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
                                                <td>{{ $berita->kategori }}</td>
                                                <td>{{ $berita->judul }}</td>
                                                <td><img width="50" height="50"
                                                        src="{{ asset('images/berita/' . $berita->gambar) }}" alt="">
                                                </td>
                                                {{-- <td>{{ $berita->deskripsi }}</td> --}}
                                                <td>{{ $berita->tanggal }}</td>
                                                <td>
                                                    <a href="{{ route('beritas-admin.edit', $berita->id) }}"
                                                        class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>


                                                    <form class="btn btn-icon btn-danger"
                                                        action="{{ route('beritas-admin.destroy', $berita->id) }}"
                                                        method="POST" onsubmit="return confirm('Apakah Anda Yakin?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" title="Hapus"
                                                            class="btn btn-danger btn-sm"><i class="fas fa-times"></i>
                                                        </button>
                                                    </form>
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