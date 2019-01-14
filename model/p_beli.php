<?php
session_start();
$id_produk = $_GET['id'];

if (isset($_SESSION['keranjang'][$id_produk])) {
	$_SESSION['keranjang'][$id_produk]+=1;
}
else {
	$_SESSION['keranjang'][$id_produk] = 1;
 }
if (isset($_SESSION['keranjang'])) {
	$_SESSION['keranjang']= $id_produk;
}
 echo "<script>alert('Produk telah masuk ke Keranjang Belanja');</script>";
 echo "<script>location='../shop?page=keranjang#belanja';</script>";
 ?>
