<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <title>Tambah Form</title>
</head>
<body class="p-4">
    <div class="topnav mb-4">
        <a href="{{ route('dokter.index') }}">Home</a>
        <a class="active" href="{{ route('dokter.index') }}">Data Dokter</a>
        <a href="#data_obat">Data Obat</a>
        <a href="#ruang_poliklinik">Ruangan Poliklinik</a>
    </div>

    <h1>Form Tambah Dokter</h1>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('dokter.store') }}" method="POST" class="form">
        @csrf
        <div class="form">
            <div class="m-3">
                <label for="nama" class="form-label">Nama Dokter</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required />
            </div>
            <div class="m-3">
                <label for="sip" class="form-label">No. SIP</label>
                <input type="text" class="form-control" id="sip" name="sip" value="{{ old('sip') }}" required />
            </div>
            <div class="m-3">
                <label for="spesialis" class="form-label">Spesialisasi</label>
                <input type="text" class="form-control" id="spesialis" name="spesialis" value="{{ old('spesialis') }}" required />
            </div>
            <div class="m-3">
                <label for="kontak" class="form-label">Kontak</label>
                <input type="text" class="form-control" id="kontak" name="kontak" placeholder="8xx-xxxx-xxxx" value="{{ old('kontak') }}" required />
            </div>
        </div>
        <div class="m-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</body>
</html>