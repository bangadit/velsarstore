<?php
session_start();
$id_produk = $_GET["id"];
unset($_SESSION["keranjang"]);

	echo "<script>alert('Produk dihapus dari Keranjang');</script>";
  	echo "<script>location='../shop?page=keranjang#belanja';</script>";

?>
