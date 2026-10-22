<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DAFTAR OBAT</title>
</head>
<body class="p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1><b>Daftar Obat</b></h1>
        <div>
            @auth
                <span class="me-3 fw-bold">Halo, {{ Auth::user()->username }}</span>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login Petugas</a>
            @endauth
        </div>
    </div>
    
    @auth
        <a href="{{ route('obat.create') }}" class="btn btn-success mb-3">Tambah Obat</a>
    @endauth

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID / Kode Obat</th>
                <th>Nama Obat</th>
                <th>Kategori Obat</th>
                <th>Stok Obat</th>
                <th>Pabrik Pembuat</th>
                @auth
                    <th>Aksi</th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($obat as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id_obat }}</td>
                <td>{{ $item->nama_obat }}</td>
                <td>{{ $item->kategori_obat }}</td>
                <td>{{ $item->stok_obat }}</td>
                <td>{{ $item->pabrik_pembuat }}</td>
                @auth
                <td>
                    <a href="{{ route('obat.edit', $item) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                    
                    <form action="{{ route('obat.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
                @endauth
            </tr>
            @endforeach

            @if ($obat->isEmpty())
            <tr>
                <td colspan="{{ Auth::check() ? 7 : 6 }}" class="text-center text-muted py-4">Belum ada data obat.</td>
            </tr>
            @endif
        </tbody>
    </table>
</body>
</html>