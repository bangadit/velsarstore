<?php
session_start();
include "../conf/koneksi.php";

$username = md5($_POST['username']);
$password = md5($_POST['password']);
		$sql = mysqli_query($koneksi, "SELECT * from admin where username ='{$username}' and password ='{$password}'");
		$jumlah = mysqli_num_rows($sql);

if ($jumlah > 0) {
	$_SESSION['loginadmin'] = $username;
	echo "<script>alert('Login Berhasil !!!');document.location='index'</script>";
}
else{
	echo "<script>alert('Anda Bukan Admin !!!');document.location='login'</script>";
}
?>
