<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Daftar Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h1 class="mb-4">Edit Daftar Obat</h1>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('obat.update', $obat) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_obat" class="form-label">Kode / ID Obat</label>
            <input type="text" class="form-control" id="id_obat" name="id_obat" value="{{ old('id_obat', $obat->id_obat) }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ old('nama_obat', $obat->nama_obat) }}" required>
        </div>

        <div class="mb-3">
            <label for="kategori_obat" class="form-label">Kategori Obat</label>
            <input type="text" class="form-control" id="kategori_obat" name="kategori_obat" value="{{ old('kategori_obat', $obat->kategori_obat) }}" required>
        </div>

        <div class="mb-3">
            <label for="stok_obat" class="form-label">Stok Obat</label>
            <input type="number" class="form-control" id="stok_obat" name="stok_obat" value="{{ old('stok_obat', $obat->stok_obat) }}" required>
        </div>

        <div class="mb-3">
            <label for="pabrik_pembuat" class="form-label">Pabrik Pembuat</label>
            <input type="text" class="form-control" id="pabrik_pembuat" name="pabrik_pembuat" value="{{ old('pabrik_pembuat', $obat->pabrik_pembuat) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Data</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary">Batal</a>
    </form>

</body>
</html>