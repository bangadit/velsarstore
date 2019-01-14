<?php
include '../conf/koneksi.php';

if (isset($_POST['simpan'])){
	$foto = $_FILES['foto']['name'];
	$sumber = $_FILES['foto']['tmp_name'];
	move_uploaded_file($sumber, '../assets/images/produk/' . $foto);
	$perintah = mysqli_query($koneksi, "INSERT INTO produk VALUES(NULL, '".$_POST['kategori']."', '".$_POST['nama']."', '".$_POST['berat']."', '".$_POST['harga']."', '".$_POST['stok']."', '".$foto."', '".$_POST['deskripsi']."') ");

	if ($perintah) {
		echo "<script>alert('Data Berhasil Disimpan. ');document.location='t_tampilproduk.php'</script>";
	}
	else{
		echo "<script>history.go(-1);document.location='t_produk.php'</script>";
	}
}
 ?>
