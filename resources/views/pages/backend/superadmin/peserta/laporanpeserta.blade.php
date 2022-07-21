<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LAPORAN PESERTA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <h5 style="text-align: center;">LAPORAN PESERTA</h5>
    <h5 style="text-align: center;">DUTA BACA KABUPATEN INDRAMAYU</h5>
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @forelse ($administrasis as $administrasi)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $administrasi->user->name }}</td>
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
            @empty
            <tr>
                <td colspan="4" class="text-center">Tidak Ada Data</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</body>

</html>