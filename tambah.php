<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $spesialis = $_POST['spesialis'];
    $sip = $_POST['sip'];
    $kontak = $_POST['kontak'];

    $sql = "INSERT INTO data_dokter (nama, spesialis, sip, kontak) VALUES (?, ?, ?, ?)";
    
    mysqli_execute_query($koneksi, $sql, [$nama, $spesialis, $sip, $kontak]);
    header("Location: index.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Form</title>
  </head>
  <body>
    <div class="topnav">
      <a href="#home">Home</a>
      <a class="active" href="#data_dokter">Data Dokter</a>
      <a href="#data_obat">Data Obat</a>
      <a href="#ruang_poliklinik">Ruangan Poliklinik</a>
      <a href="#" class="split"><i class="fa-solid fa-user"></i>Profile</a>
    </div>
    <h1>Form</h1>
    <form action="" method="post" class="form">
    <div class="form">
      <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Dokter</label>
        <input type="text" class="form-control" id="nama" name="nama" required />
      </div>
      <div class="m-3">
        <label for="exampleFormControlTextarea1" class="form-label">No. SIP</label>
        <input type="text" class="form-control" id="sip" name="sip" rows="1" required ></input>
      </div>
      <div class="m-3">
        <label for="exampleFormControlTextarea1" class="form-label">Spesialisasi</label>
        <input type="text" class="form-control" id="spesialis" name="spesialis" rows="1" required></input>
      </div>
      <div class="m-3">
          <label for="exampleFormControlTextarea1" class="form-label">Kontak</label>
          <input type="text" class="form-control" placeholder="8xx-xxxx-xxxx" name="kontak" required></input>
        </div>
      </div>
      <div class="m-2">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class= "btn btn-secondary">Batal</a>
      </div>
      </form>
    </div>
  </body>
</html>
