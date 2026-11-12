<?php 
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $spesialis = $_POST['spesialis'];
    $sip = $_POST['sip'];
    $kontak = $_POST['kontak'];

    $sql = "UPDATE data_dokter SET nama=?, spesialis=?, kontak=? WHERE sip=?";
    
    mysqli_execute_query($koneksi, $sql, [$nama, $spesialis, $kontak, $sip]);
    header("Location: index.php");
    exit;
}
$sip = $_GET['sip'] ?? '';
$sql = "SELECT * FROM data_dokter WHERE sip = ?";
$hasil = mysqli_execute_query($koneksi, $sql, [$sip]);
$row = mysqli_fetch_assoc($hasil);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Edit Data Dokter</title>
  </head>
  <body class="p-4">
    <h1>Edit Data Dokter</h1>
    <form action="" method="post">
    <input type="hidden" name="sip" value="<?= ($row['sip']);?>">
    <div class="m-3">
        <label class="form-label">Nama Dokter</label>
        <input type="text" class="form-control" name="nama" required value="<?= ($row['nama']);?>"/>
      </div>
      <div class="m-3">
        <label class="form-label">Spesialisasi</label>
        <input type="text" class="form-control" name="spesialis" required value="<?= ($row['spesialis']);?>"/>
      </div>
      <div class="m-3">
        <label class="form-label">Kontak</label>
        <input type="text" class="form-control" name="kontak" required value="<?= ($row['kontak']);?>"/>
      </div>
      <button type="submit" class="btn btn-success">Update Data</button>
      <a href="index.php" class="btn btn-secondary">Batal</a>
      </form>
  </body>
</html>