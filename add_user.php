<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if($add = mysqli_query($db, "INSERT INTO user (username, password, email) VALUES('$username','$password','$email')")){
    header("location: login.php");
    exit();
  }

  die("Terdapat Kesalahan : ". mysqli_error($db));

?>
