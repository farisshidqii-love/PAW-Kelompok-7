<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama_obat"];
    $kategori = $_POST["kategori_obat"];
    $stok = $_POST["stok_obat"];
    $pabrik = $_POST["pabrik_pembuat"];

    $sql = "INSERT INTO obat (nama_obat, kategori_obat, stok_obat, pabrik_pembuat) VALUES (?, ?, ?, ?)";
    
    mysqli_execute_query($koneksi, $sql, [$nama, $kategori, $stok, $pabrik]);

    header("Location: index.php");
    exit;
}
?> 

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

    <form method="post">
        <!-- Input ID Obat dihapus karena AUTO_INCREMENT -->

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
        </div>

        <div class="mb-3">
            <label for="kategori_obat" class="form-label">Kategori Obat</label>
            <input type="text" class="form-control" id="kategori_obat" name="kategori_obat" required>
        </div>

        <div class="mb-3">
            <label for="stok_obat" class="form-label">Jumlah / Stok Obat</label>
            <input type="number" class="form-control" id="stok_obat" name="stok_obat" required>
        </div>

        <div class="mb-3">
            <label for="pabrik_pembuat" class="form-label">Pabrik Pembuat</label>
            <input type="text" class="form-control" id="pabrik_pembuat" name="pabrik_pembuat" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</body>
</html>