<?php
include "../conf/koneksi.php";
$id=$_GET['id'];
$hapus="delete from produk where id='$id'";
$hasil=mysqli_query($koneksi, $hapus);
if($hasil){
	echo"<script>alert('Penghapusan Data Berhasil !!!');document.location='t_tampilproduk.php'</script>";
	}else{
	echo "<script>alert('Penghapusan Data Gagal !!!');document.location='t_tampilproduk.php'</script>";
	}
?>
