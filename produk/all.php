<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="content" class="col-sm-9">
      <div class="row">
        <?php
        include "conf/koneksi.php";
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $perintah=mysqli_query($koneksi, "SELECT * FROM produk");
        $ambil = $koneksi->query("SELECT * FROM produk"); ?>
            <?php while($data = $ambil->fetch_assoc()){ ?>
            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                    <img src="assets/images/produk/<?=$data['foto'];?>" style="height: 300px">
                    <div class="caption">
                        <h3><a href="#">
                        <?php echo "$data[nama]";?></a></h3>
                        <p>Harga : <strong>IDR <?php echo number_format($data["harga"]); ?></strong>  </p>
                        <?php
                        if ($data['stok'] > 0) {
                        ?>
                        <p><a href="model/p_beli.php?id_produk=<?php echo $data['id_produk']; ?>" class="btn btn-success" role="button">Beli Sekarang</a>
                        <?php } ?>
                        <br>
                        <?php
                        if($data = mysqli_fetch_row($perintah))
                        {
                        echo("<a href='?page=bibit#belanja' class='btn btn-primary' role='button'>Lihat Detail</a>");
                        } ?>
                        </p>
                    </div>
                </div>
            </div>

        <?php } ?>
      </div>
  </div>
  </body>
</html>
