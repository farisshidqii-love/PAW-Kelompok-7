<?php
require "koneksi.php";
$hasil = mysqli_query($koneksi,
 "SELECT * FROM obat");
?>
<h1><B>Daftar Obat</B></h1>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama Obat</th>
        <th>Kategori Obat</th>
        <th>Stok Obat</th>
        <th>Pabrik Pembuat</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
<tr>
    <td><?= $row["id_obat"] ?></td>
    <td><?= $row["nama_obat"] ?></td>
    <td><?= $row["kategori_obat"] ?></td>
    <td><?= $row["stok_obat"] ?></td>
    <td><?= $row["pabrik_pembuat"] ?></td>
 </tr>
 <?php } ?>
 </table>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR OBAT</title>
</head>
<body>
    <h1><B>Daftar Obat</B></h1>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>ID Obat</th>
            <th>Nama Obat</th>
            <th>Kategori Obat</th>
            <th>Stok Obat</th>
            <th>Pabrik Pembuat</th>
        </tr>
        <tr>
            <td>1</td>
            <td>OBT001</td>
            <td><strong>Paracetamol 500mg</strong></td>
            <td>Analgesik</td>
            <td>150</td>
            <td>PT Kalbe Farma</td>
        </tr>
        <tr>
            <td>2</td>
            <td>OBT002</td>
            <td><strong>Amoxicillin 500mg</strong></td>
            <td>Antibiotik</td>
            <td>85</td>
            <td>PT Sanbe Farma</td>
        </tr>
        <tr>
            <td>3</td>
            <td>OBT003</td>
            <td><strong>Vitamin C 1000mg</strong></td>
            <td>Vitamin & Suplemen</td>
            <td>200</td>
            <td>PT Kimia Farma</td>
        </tr>
        <tr>
            <td>4</td>
            <td>OBT004</td>
            <td><strong>CTM 4mg</strong></td>
            <td>Antihistamin</td>
            <td>45</td>
            <td>PT Dexa Medica</td>
        </tr>
        <tr>
            <td>5</td>
            <td>OBT005</td>
            <td><strong>Promag Liquid</strong></td>
            <td>Antasida</td>
            <td>120</td>
            <td>PT Konimex</td>
        </tr>
    </table>
    <a href="tambah.php" class="btn btn-primary">Tambah Obat</a>
</body>
</html>