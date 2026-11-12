<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <title>Edit Data Dokter</title>
</head>
<body class="p-4">
    <h1>Edit Data Dokter</h1>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('dokter.update', $dokter->sip) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="m-3">
            <label class="form-label">No. SIP (Primary Key)</label>
            <input type="text" class="form-control" value="{{ $dokter->sip }}" disabled />
        </div>
        <div class="m-3">
            <label class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama', $dokter->nama) }}" required />
        </div>
        <div class="m-3">
            <label class="form-label">Spesialisasi</label>
            <input type="text" class="form-control" name="spesialis" value="{{ old('spesialis', $dokter->spesialis) }}" required />
        </div>
        <div class="m-3">
            <label class="form-label">Kontak</label>
            <input type="text" class="form-control" name="kontak" value="{{ old('kontak', $dokter->kontak) }}" required />
        </div>
        <div class="m-3">
            <button type="submit" class="btn btn-success">Update Data</button>
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</body>
</html>