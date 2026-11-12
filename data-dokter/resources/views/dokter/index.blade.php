<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <title>Modul Dokter & Medis</title>
</head>

<body class="p-4">
    <div class="topnav d-flex justify-content-between align-items-center mb-4">
        <div>
            <a href="{{ route('dokter.index') }}">Home</a>
            <a class="active" href="{{ route('dokter.index') }}">Data Dokter</a>
            <a href="#data_obat">Data Obat</a>
            <a href="#ruang_poliklinik">Ruangan Poliklinik</a>
        </div>
        <div>
            @auth
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link text-white text-decoration-none">
                        <i class="fa-solid fa-user"></i> Logout ({{ Auth::user()->username }})
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="split"><i class="fa-solid fa-user"></i> Login</a>
            @endauth
        </div>
    </div>

    <h1>Data Dokter</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped-columns table-bordered">
        <thead>
            <tr>
                <th>Nama dokter</th>
                <th>SIP</th>
                <th>Spesialisasi</th>
                @can('lihat-kontak-dokter')
                    <th>Kontak</th>
                @endcan
                @can('kelola-dokter')
                    <th>Edit/Hapus</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($dokter as $row)
                <tr>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->sip }}</td>
                    <td>{{ $row->spesialis }}</td>
                    @can('lihat-kontak-dokter')
                        <td>{{ $row->kontak }}</td>
                    @endcan
                    @can('kelola-dokter')
                    @auth
                        <td>
                            @can('update', $row)
                                <a href="{{ route('dokter.edit', $row->sip) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                            @endcan

                            @can('delete', $row)
                                <form action="{{ route('dokter.destroy', $row->sip) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            @endcan
                        </td>
                        @endauth
                    @endcan
                </tr>
            @endforeach
            @if ($dokter->isEmpty())
                <tr>
                    <td colspan="@auth 5 @else 4 @endauth" class="text-center text-muted">Belum ada data dokter.</td>
                </tr>
            @endif
        </tbody>
    </table>
    @can('kelola-dokter')
        <a href="{{ route('dokter.tambah') }}" class="btn btn-primary">Tambah Data</a>
    @endcan
</body>

</html>
