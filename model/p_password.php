<?php

session_start();

include "../conf/koneksi.php";

$id_member = $_POST['id_member'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM member WHERE id_member = '$id_member' AND password = '$password'";
$hasil = $koneksi->query($sql);
$q = $hasil->num_rows;
if ($q) {
  $cetak = $hasil->fetch_assoc();
  extract($cetak);
  echo '<script>window.location=("../member/newpassword");</script>';
}
else{
  echo "<script>history.go(-1)</script>";
}
?>
