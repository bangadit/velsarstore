<?php
session_start();
include "../conf/koneksi.php";
			$id = isset($_GET['id_transaksi']) ? $_GET['id_transaksi'] : '';
			$data 	= mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi='$id'"));
			$sql = mysqli_query($koneksi,"UPDATE transaksi SET status='Dibatalkan Oleh Admin', tgl_sampai='-' WHERE id_transaksi=$id");
			    if($sql){
			       echo "<script>alert('Pembatalan Pembelian Berhasil !!!');document.location='datapembeli.php'</script>";
			    }else{
			        echo "<script>alert('Pembatalan Pembelian Gagal !!!');document.location='datapembeli.php'</script>";
			    }
?>
