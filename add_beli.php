<?php
include "koneksi.php";

$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$notelpon = $_POST['notelpon'];
$hari = $_POST['hari'];

if($add = mysqli_query($db, "INSERT INTO pembelian (nama, jumlah, alamat, kota, notelpon, hari) VALUES('$nama','$jumlah','$alamat','$kota','$notelpon','$hari')")){
    header("location: index2.php");
    exit();
  }

  die("Terdapat Kesalahan : ". mysqli_error($db));

?>
