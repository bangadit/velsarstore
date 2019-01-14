<?php
include "conf/koneksi.php";
if (!isset($_SESSION['sesi_login'])) {
	echo "<script>alert('Silahkan Login Dulu');</script>";
 	echo "<script>location='member/login';</script>";
}
else{
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
<body>
<div>
<div class="col-md-9">
                <div class="row">
        <table class="table table-striped" align="center">
	<tr bgcolor="#FFFFFF">
    <td>
<center><font color="#000000" size="2"><b><h3>Data Pembelian</h3></b></center>
<br>
<table class="table table-responsive" align="center">
<tr>
	<td><font color="black"><b>ID Transaksi</b></font></td>
    <td><font color="black"><b>Nama Pembeli</b></font></td>
	<td><font color="black"><b>Nama Produk</b></font></td>
    <td><font color="black"><b>Tanggal Beli</b></font></td>
    <td><font color="black"><b>Tanggal Sampai</b></font></td>
    <td><font color="black"><b>Jumlah Produk</b></font></td>
    <td><font color="black"><b>Total Harga</b></font></td>
    <td><font color="black"><b>Status</b></font></td>
    <td><font color="black"><b>Batal</b></font></td>
    <td><font color="black"><b>Selesai</b></font></td>
</tr>

<?php
	if ($_SESSION['sesi_login']) {
        $id_user = $_SESSION['sesi_login'];
      }

	$perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Menunggu Konfirmasi'");
	while($data = mysqli_fetch_row($perintah)){
	echo("<tr>");
	echo("<td>$data[0]</td>");
	echo("<td>$data[2]</td>");
	echo("<td>$data[10]</td>");
	echo("<td>$data[5]</td>");
	echo("<td>$data[6]</td>");
	echo("<td>$data[12]</td>");
	echo("<td>$data[13]</td>");
	echo("<td>$data[14]</td>");
	echo("<td><a href='model/p_batal?id_transaksi=$data[0]' class='btn btn-danger btn-xs'>Batal</a></td>");
	echo("<td><a href='model/p_sampai?id_transaksi=$data[0]' class='btn btn-success btn-xs'>Selesai</a></td>");
	echo("</tr>");
}
?>
<?php
	if ($_SESSION['sesi_login']) {
        $id_user = $_SESSION['sesi_login'];
      }

	$perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Dibatalkan Oleh Pembeli'");
	while($data = mysqli_fetch_row($perintah)){
	echo("<tr>");
	echo("<td>$data[0]</td>");
	echo("<td>$data[2]</td>");
	echo("<td>$data[10]</td>");
	echo("<td>$data[5]</td>");
	echo("<td>$data[6]</td>");
	echo("<td>$data[12]</td>");
	echo("<td>$data[13]</td>");
	echo("<td>$data[14]</td>");
	echo("</tr>");
}
?>
<?php
	if ($_SESSION['sesi_login']) {
        $id_user = $_SESSION['sesi_login'];
      }

	$perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Dibatalkan Oleh Admin'");
	while($data = mysqli_fetch_row($perintah)){
	echo("<tr>");
	echo("<td>$data[0]</td>");
	echo("<td>$data[2]</td>");
	echo("<td>$data[10]</td>");
	echo("<td>$data[5]</td>");
	echo("<td>$data[6]</td>");
	echo("<td>$data[12]</td>");
	echo("<td>$data[13]</td>");
	echo("<td>$data[14]</td>");
	echo("</tr>");
}
?>
<?php
	if ($_SESSION['sesi_login']) {
        $id_user = $_SESSION['sesi_login'];
      }

	$perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Barang Sedang Dikirim'");
	while($data = mysqli_fetch_row($perintah)){
	echo("<tr>");
	echo("<td>$data[0]</td>");
	echo("<td>$data[2]</td>");
	echo("<td>$data[10]</td>");
	echo("<td>$data[5]</td>");
	echo("<td>$data[6]</td>");
	echo("<td>$data[12]</td>");
	echo("<td>$data[13]</td>");
	echo("<td>$data[14]</td>");
	echo("<td></td>");
	echo("<td><a href='model/p_sampai?id_transaksi=$data[0]' class='btn btn-success btn-xs'>Selesai</a></td>");
	echo("</tr>");
}
?>
<?php
	if ($_SESSION['sesi_login']) {
        $id_user = $_SESSION['sesi_login'];
      }

	$perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Barang Telah Sampai'");
	while($data = mysqli_fetch_row($perintah)){
	echo("<tr>");
	echo("<td>$data[0]</td>");
	echo("<td>$data[2]</td>");
	echo("<td>$data[10]</td>");
	echo("<td>$data[5]</td>");
	echo("<td>$data[6]</td>");
	echo("<td>$data[12]</td>");
	echo("<td>$data[13]</td>");
	echo("<td>$data[14]</td>");
	echo("</tr>");
}
?>
</table>
</td>
	</tr>
	</table>
</div>
</div>
</div>
</body>
</html>
<?php } ?>
