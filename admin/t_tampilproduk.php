<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Tampil Produk</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>
<body>
<div class="container" style="width:900px">
        <div class="jumbotron" style="background-color:#000; border: solid #000; opacity:0.8; filter:alpha(opacity=40);">
        <table class="table table-striped" align="center">
	<tr bgcolor="#FFFFFF">
    <td>
<center><font color="#000000" size="2"><b><h3>Data Produk</h3></b></center>
<br>
<table class="table table-striped" align="center">
<tr>
	<td><font color="black"><b>ID</font></td>
    <td><font color="black"><b>Kategori</font></td>
	<td><font color="black"><b>Nama Produk</font></td>
    <td><font color="black"><b>Berat (kg)</font></td>
    <td><font color="black"><b>Harga Produk</font></td>
    <td><font color="black"><b>Stok</font></td>
    <td><font color="black"><b>Detail</font></td>
    <td><font color="black"><b>Ubah</font></td>
    <td><font color="black"><b>Hapus</font></td>
</tr>

<?php
include "../conf/koneksi.php";
$perintah = "SELECT * FROM produk order by kategori asc";
$hasil = mysqli_query($koneksi, $perintah);
while($data = mysqli_fetch_row($hasil))
{
	echo("<tr>");
	echo("<td>$data[0]</td>");
	echo("<td>$data[1]</td>");
	echo("<td>$data[2]</td>");
	echo("<td>$data[3]</td>");
	echo("<td>$data[4]</td>");
	echo("<td>$data[5]</td>");
	echo("<td><a href='t_detailproduk.php?id=$data[0]' class='btn btn-success btn-xs'>Detail</a></td>");
	echo("<td><a href='t_editproduk.php?id=$data[0]' class='btn btn-success btn-xs'>Ubah</a></td>");
	echo("<td><a href='hapusproduk.php?id=$data[0]' class='btn btn-danger btn-xs'>Hapus</a></td>");
	echo("</tr>");
}
?>
</table>
</td>
	</tr>
	</table>
</div>
</div>
</body>
</html>
<?php include "footer.php" ?>
