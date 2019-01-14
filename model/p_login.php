<?php

session_start();

include "../conf/koneksi.php";

  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM member WHERE email = '$email' AND password = '$password'";
  $hasil = $koneksi->query($sql);
  $q = $hasil->num_rows;
  if ($q) {
    $cetak = $hasil->fetch_assoc();
    extract($cetak);
    $_SESSION['sesi_login'] = $id_member;
    $_SESSION['id_member'] = $id_member;
    echo "<script>document.location='../member/dashboard'</script>";
  }
  else{
  echo '<script>history.go(-1);</script>';
  }

?>
