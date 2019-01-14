<?php
include "../conf/koneksi.php";

$id= $_POST['id'];
$kategori= $_POST['kategori'];
$nama= $_POST['nama'];
$berat= $_POST['berat'];
$harga= $_POST['harga'];
$stok= $_POST['stok'];
$deskripsi= $_POST['deskripsi'];

if (!empty($_FILES['foto']['tmp_name']))
	{

			$namafolder="../assets/images/produk/"; //tempat menyimpan file
			$jenis_gambar=$_FILES['foto']['type'];
			$foto = $_FILES['foto']['name'];

			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
			{

				$afoto = $namafolder . basename($_FILES['foto']['name']);

				if (!move_uploaded_file($_FILES['foto']['tmp_name'], $afoto))
				{
					die("Gambar gagal dikirim");
					}
				else{
					$ambil = mysqli_query($koneksi, "SELECT * from produk where id='$id'");
					$data = mysqli_fetch_array($ambil);
					@unlink('../assets/images/produk/'. $data[$foto] );
					mysqli_query($koneksi, "UPDATE produk SET foto='$foto' WHERE id='$id'");
				}
			}
		else { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
	}
		if(empty($foto))   //jika gambar kosong atau tidak di ganti
		{
		$perintah=mysqli_query($koneksi, "UPDATE produk set id='$id', kategori='$kategori', nama='$nama', berat='$berat', harga='$harga', stok='$stok', deskripsi='$deskripsi' where id='$id'") or die(mysql_error());
		}
		elseif (!empty($foto)) // jika gambar di ganti
		{
		$perintah=mysqli_query($koneksi, "UPDATE produk set id='$id', kategori='$kategori', nama='$nama', berat='$berat', harga='$harga', stok='$stok', deskripsi='$deskripsi', foto='$foto' where id='$id'") or die(mysql_error());
		}

	if($perintah){
		echo "<script>alert('Data produk Berhasil Diubah!!!');document.location='t_tampilproduk.php'</script>";
		}
		else
		{ echo "<script>alert('Data produk Gagal Diubah!!!);document.location='t_editproduk.php;</script>";
		}
		?>
