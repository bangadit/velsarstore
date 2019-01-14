<?php
session_start();
include "../conf/koneksi.php";
			$id = isset($_GET['id_transaksi']) ? $_GET['id_transaksi'] : '';
			$data 	= mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi='$id'"));
			$now  = date('d-m-Y');
			$sql = mysqli_query($koneksi,"UPDATE transaksi SET status='Barang Telah Sampai', tgl_sampai='$now' WHERE id_transaksi=$id");
			    if($sql){
			       echo "<script>alert('Konfirmasi Berhasil !!!');document.location='../member/history'</script>";
			    }else{
			        echo "<script>alert('Konfirmasi Gagal !!!');document.location='../member/history'</script>";
			    }
?>
