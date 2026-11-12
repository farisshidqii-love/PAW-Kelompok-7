<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Akses Ditolak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm p-4 text-center">
                    <h1 class="display-1 fw-bold text-danger">403</h1>
                    <h4 class="mb-3">Akses Ditolak</h4>
                    <p class="text-muted mb-4">
                        {{ $exception->getMessage() ?: 'Anda tidak memiliki hak akses untuk membuka halaman atau melakukan tindakan ini.' }}
                    </p>
                    <div>
                        <a href="{{ route('dokter.index') }}" class="btn btn-primary">Kembali ke Data Dokter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>