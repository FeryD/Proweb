<?php
include "koneksi.php";

if($_POST['judul']){

  $judul = $_POST['judul'];
  $capt = $_POST['caption'];
  $foto = $_FILES['foto'];
  $tgl   = date('l, d-m-Y');

  $eks = explode(".", $_FILES['foto']['name']);
  $nm_foto = "POST".round(microtime(true)).".".end($eks);
  $sumber = $_FILES['foto']['tmp_name'];
  $upload = move_uploaded_file($sumber,"images/post/".$nm_foto);

  if($upload){
    if($add = mysqli_query($db, "INSERT INTO hikegram VALUES ('$nm_foto','$judul','$capt','$tgl')")){
      header("location: contact.php");
    }
  }
}
?>
