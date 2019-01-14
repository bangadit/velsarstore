<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Detail Produk</title>
    <link href="../assets/admin/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/admin/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../assets/admin/ItemSlider/css/main-style.css" rel="stylesheet" />
    <link href="../assets/admin/css/style.css" rel="stylesheet" />
</head>
<body background="../assets/images/produk/grass2.jpg">
<?php
				include "../conf/koneksi.php";
				$id=$_GET['id'];
				$perintah="SELECT * FROM produk WHERE id='$id'";
				$hasil=mysqli_query($koneksi, $perintah);
				$data=mysqli_fetch_array($hasil);
?>
<div class="container" style="width:900px; padding-top: 15px">
        <div class="jumbotron" style="background-color:#000; border: solid #000; opacity:0.8; filter:alpha(opacity=40);">
        <div class="panel-body">
<div class="container">
	<table class="jumbotron">
<font color="#FFFFFF">
			    <center><h4>Detail Data Produk</h4></center>
			    <br>
	<table class="table">
		<div class="col-md-8 col-md-offset-2">
        <img src="../assets/images/produk/<?=$data['foto'];?>" width="50%" align="right">
				    <form method="post" action="tampilproduk.php" class="form-horizotal">
                    			<label for="kategori">Kategori: </label>
								<p for="kategori"><?php echo "$data[kategori]";?> </p>
								<label for="nama">Nama Produk: </label>
								<p for="nama"><?php echo "$data[nama]";?> </p>
                                <label for="berat">Berat : </label>
								<p for="berat"><?php echo "$data[berat]";?> kg </p>
								<label for="harga">Harga: </label>
								<p for="harga"><?php echo "$data[harga]";?></p>
								<label for="stok">Stok: </label>
                                <p for="stok"><?php echo "$data[stok]";?></p>
                                <label for="deskripsi">Deskripsi: </label>
                                <p for="deskripsi"><?php echo "$data[deskripsi]";?></p>
				<div class="form-group">
					<a href="t_tampilproduk.php" class="btn btn-danger">Kembali</a>
				</div>
					</form>
		</div>
	</table>
    </table>
    </font>
</div>
</div>
        </div>
</div>
</body>
</html>
