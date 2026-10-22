<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h1 class="mb-4"><b>Tambah Obat</b></h1>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('obat.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_obat" class="form-label">Kode / ID Obat</label>
            <input type="text" class="form-control" id="id_obat" name="id_obat" value="{{ old('id_obat') }}" required placeholder="Contoh: OBT-001">
        </div>

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ old('nama_obat') }}" required>
        </div>

        <div class="mb-3">
            <label for="kategori_obat" class="form-label">Kategori Obat</label>
            <input type="text" class="form-control" id="kategori_obat" name="kategori_obat" value="{{ old('kategori_obat') }}" required>
        </div>

        <div class="mb-3">
            <label for="stok_obat" class="form-label">Jumlah / Stok Obat</label>
            <input type="number" class="form-control" id="stok_obat" name="stok_obat" value="{{ old('stok_obat') }}" required>
        </div>

        <div class="mb-3">
            <label for="pabrik_pembuat" class="form-label">Pabrik Pembuat</label>
            <input type="text" class="form-control" id="pabrik_pembuat" name="pabrik_pembuat" value="{{ old('pabrik_pembuat') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary">Batal</a>
    </form>

</body>
</html>