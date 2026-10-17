<?php
require 'koneksi.php';
if(isset($_GET['sip'])) {
    $sip = $_GET['sip'];
    mysqli_execute_query($koneksi, "DELETE FROM data_dokter WHERE sip = ?", [$sip]);
}
header("Location: index.php");
?>