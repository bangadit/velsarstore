<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="content" class="col-sm-9">

                <div class="row">
                    <div class="btn-group alg-right-pad">
			                <?php
							if(isset($_POST['klikcari'])){
							$cari = $_POST['cari'];
							include "conf/koneksi.php";
                            $id = isset($_GET['id']) ? $_GET['id'] : '';
                            $perintah=mysqli_query($koneksi, "SELECT * from produk where nama like '%".$cari."%'");
                            $data=mysqli_num_rows($perintah);
                            ?>
                    </div>
                </div>
                <div class="row">
                    <?php $ambil = $koneksi->query("SELECT * from produk where nama like '%".$cari."%'"); ?>
                    <?php while($data = $ambil->fetch_assoc()){ ?>
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                          <div style=" position: absolute; background: #000; z-index: 100; color: #fff; font-size: 10px; padding: 5px">
                            STOK: <?php echo "$data[stok]";?>
                          </div>
                            <img src="assets/images/produk/<?=$data['foto'];?>" style="height: 125px">
                            <div class="caption">
                                <h3><a href="#">
                                <?php echo "$data[nama]";?></a></h3>
                                <p>Harga : <strong>Rp. <?php echo "$data[harga]";?></strong>  </p>
                                <p>Berat : <?php echo "$data[berat]";?> kg   </p>
                                <?php
                                if ($data['stok'] > 0) {
                                ?>
                                <p><a href="model/p_beli?id=<?php echo $data['id']; ?>" class="btn btn-success" role="button">Beli Sekarang</a>
                                <?php } ?>
                                <?php
                                if($data = mysqli_fetch_row($perintah))
                                {
                                echo("<a href='model/p_detailproduk?id=$data[0]' class='btn btn-primary' role='button'>Lihat Detail</a>");
                                } ?>
                                </p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                </div>
               <?php } ?>

            </div>

  </body>
</html>
