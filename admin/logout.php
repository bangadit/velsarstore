<?php
session_start();
unset($_SESSION['loginadmin']);
echo "<script>alert('Anda Berhasil Logout !');document.location='index'</script>";
?>
