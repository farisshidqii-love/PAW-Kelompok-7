<?php require "koneksi.php";
$hasil = mysqli_query($koneksi, "SELECT * FROM data_dokter");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Modul Dokter & Medis</title>
  </head>
  <body>
    <div class="topnav">
      <a href="#home">Home</a>
      <a class="active" href="#data_dokter">Data Dokter</a>
      <a href="#data_obat">Data Obat</a>
      <a href="#ruang_poliklinik">Ruangan Poliklinik</a>
      <a href="#" class="split"><i class="fa-solid fa-user"></i>Profile</a>
    </div>
    
    <h1>Data Dokter</h1>
    <table class="table table-striped-columns table-bordered">
      <thead>
      <tr>
        <th>Nama dokter</th>
        <th>SIP</th>
        <th>Spesialisasi</th>
        <th>Kontak</th>
        <th>Edit/Hapus</th>
      </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($hasil)){ ?>
      <tr>
          <td><?= $row["nama"] ?? ''; ?></td>
          <td><?= $row["sip"] ?? ''; ?></td>
          <td><?= $row["spesialis"] ?? ''; ?></td>
          <td><?= $row["kontak"] ?? ''; ?></td>
          <td>
            <a href="update.php?sip=<?= $row['sip'] ?? '' ?>" class="btn btn-warning">Edit</a>
            <a href="delete.php?sip=<?= $row['sip'] ?? '' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
          </td>
      </tr>
  <?php } ?>
      </tbody>
    </table>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>

  </body>
</html>
