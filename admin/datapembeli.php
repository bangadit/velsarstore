<?php include "header.php"; ?>
<title>Data transaksi</title>
<link rel="stylesheet" href="../bootstrap/bootstrap.css">
<div class="container" style="width:1300px">
        <div class="jumbotron" style="background-color:#000; border: solid #000; opacity:0.8; filter:alpha(opacity=40);">
        <div class="panel-body" style="background-color:#FFFFFF">
		<table>
    <td>
<center><font color="#000000" size="2"><b><h3>Data transaksi</h3></b></center>
<br>
<table class="table table-striped" align="center">
<tr>
				<td align="center"><b>ID Transaksi</b></td>
				<td align="center"><b>Nama Pembeli</b></td>
                <td align="center"><b>Nama Barang</b></td>
				<td align="center"><b>Alamat</b></td>
				<td align="center"><b>No Telepon</b></td>
				<td align="center"><b>Tgl Beli</b></td>
				<td align="center"><b>Tgl Sampai</b></td>
                <td align="center"><b>Email</b></td>
				<td align="center"><b>Harga</b></td>
				<td align="center"><b>Jumlah</b></td>
				<td align="center"><b>Total Harga</b></td>
				<td align="center"><b>Status</b></td>
			</tr>
		<?php
		$sql 	= "SELECT * FROM transaksi where status='Menunggu Konfirmasi' order by id_pembeli";
		$query 	= mysqli_query($koneksi,$sql);
		while ($data = mysqli_fetch_array($query)){
			echo("<tr>");
			echo("<td>$data[0]</td>");
			echo("<td>$data[2]</td>");
			echo("<td>$data[10]</td>");
			echo("<td>$data[4]</td>");
			echo("<td>$data[3]</td>");
			echo("<td>$data[5]</td>");
			echo("<td>$data[6]</td>");
			echo("<td>$data[8]</td>");
			echo("<td>$data[11]</td>");
			echo("<td>$data[12]</td>");
			echo("<td>$data[13]</td>");
			echo("<td>$data[14]</td>");
			echo("<td><a href='batal.php?id_transaksi=$data[0]' class='btn btn-danger btn-xs'>Batal</a></td>");
			echo("<td><a href='kirim.php?id_transaksi=$data[0]' class='btn btn-success btn-xs'>Konfirmasi</a></td>");
			echo("</tr>");
		}?>
        <?php
		$sql 	= "SELECT * FROM transaksi where status='Dibatalkan Oleh Pembeli' order by id_pembeli";
		$query 	= mysqli_query($koneksi,$sql);
		while ($data = mysqli_fetch_array($query)){
			echo("<tr>");
			echo("<td>$data[0]</td>");
			echo("<td>$data[2]</td>");
			echo("<td>$data[10]</td>");
			echo("<td>$data[4]</td>");
			echo("<td>$data[3]</td>");
			echo("<td>$data[5]</td>");
			echo("<td>$data[6]</td>");
			echo("<td>$data[8]</td>");
			echo("<td>$data[11]</td>");
			echo("<td>$data[12]</td>");
			echo("<td>$data[13]</td>");
			echo("<td>$data[14]</td>");
			echo("</tr>");
		}?>
        <?php
		$sql 	= "SELECT * FROM transaksi where status='Dibatalkan Oleh Admin' order by id_pembeli";
		$query 	= mysqli_query($koneksi,$sql);
		while ($data = mysqli_fetch_array($query)){
			echo("<tr>");
			echo("<td>$data[0]</td>");
			echo("<td>$data[2]</td>");
			echo("<td>$data[10]</td>");
			echo("<td>$data[4]</td>");
			echo("<td>$data[3]</td>");
			echo("<td>$data[5]</td>");
			echo("<td>$data[6]</td>");
			echo("<td>$data[8]</td>");
			echo("<td>$data[11]</td>");
			echo("<td>$data[12]</td>");
			echo("<td>$data[13]</td>");
			echo("<td>$data[14]</td>");
			echo("</tr>");
		}?>
		<?php
		$sql 	= "SELECT * FROM transaksi where status='Barang Sedang Dikirim' order by id_pembeli";
		$query 	= mysqli_query($koneksi,$sql);
		while ($data = mysqli_fetch_array($query)){
			echo("<tr>");
			echo("<td>$data[0]</td>");
			echo("<td>$data[2]</td>");
			echo("<td>$data[10]</td>");
			echo("<td>$data[4]</td>");
			echo("<td>$data[3]</td>");
			echo("<td>$data[5]</td>");
			echo("<td>$data[6]</td>");
			echo("<td>$data[8]</td>");
			echo("<td>$data[11]</td>");
			echo("<td>$data[12]</td>");
			echo("<td>$data[13]</td>");
			echo("<td>$data[14]</td>");
			echo("</tr>");
		}?>
		<?php
		$sql 	= "SELECT * FROM transaksi where status='Barang Telah Sampai' order by id_pembeli";
		$query 	= mysqli_query($koneksi,$sql);
		while ($data = mysqli_fetch_array($query)){
			echo("<tr>");
			echo("<td>$data[0]</td>");
			echo("<td>$data[2]</td>");
			echo("<td>$data[10]</td>");
			echo("<td>$data[4]</td>");
			echo("<td>$data[3]</td>");
			echo("<td>$data[5]</td>");
			echo("<td>$data[6]</td>");
			echo("<td>$data[8]</td>");
			echo("<td>$data[11]</td>");
			echo("<td>$data[12]</td>");
			echo("<td>$data[13]</td>");
			echo("<td>$data[14]</td>");
			echo("</tr>");
		}?>
		</table>
	</table>
</div>
</div>
</div>
</body>
</html>
<?php include "footer.php"; ?>
