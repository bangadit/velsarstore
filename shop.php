<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Velsar Store - Shop | Velser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
   <body>
     <p id="belanja"></p>
     <section>
       <div class="container margintop">

         <div class="row">
          <div class="col-sm-2" style="height: auto;">
            <div id="menu-cats">
              <div class="navbar-header mobile">
                <span style="top: 20px; position: relative;">MENU</span>
                <button type="button" class="navbar-toggle menu-category" data-toggle="collapse" data-target=".price-range">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
            </div>

            <div class="row">
              <div class="left-sidebar">
                <div class="price-range  collapse navbar-collapse" style="height: auto; max-height: none;">
                  <div class="menu-side all">
                    <a href="?page=shop#belanja"><h2>All</h2></a>
                  </div>

                  <div class="menu-side title">
                    <form action="?page=cari#belanja" method="post" role="search">
                      <input type="text" name="cari" placeholder="Search">
                      &nbsp;
                      <button hidden name="klikcari" type="submit">Search</button>
                    </form>
                  </div>

                  <div class="menu-side category">
                    <h2 id="showcat">Category</h2>
                    <div id="showcatcon">
                      <div class="checkbox">
                          <li class="list-group-item">
                            <a href="?page=pupuk#belanja">
                              Pupuk
                            </a>
                            <span class="label label-primary pull-right" style="color: white; background-color: #000;">
                              <?php
                              include "conf/koneksi.php";
                              $id = isset($_GET['id']) ? $_GET['id'] : '';
                              $perintah=mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori = 'Pupuk'");
                              $data=mysqli_num_rows($perintah);
                              ?>
                              <?php echo "$data";?>
                            </span>
                          </li>
                          <li class="list-group-item">
                            <a href="?page=bibit#belanja">
                              Bibit
                            </a>
                            <span class="label label-primary pull-right" style="color: white; background-color: #000;">
                              <?php
                              include "conf/koneksi.php";
                              $id = isset($_GET['id']) ? $_GET['id'] : '';
                              $perintah=mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori = 'Bibit'");
                              $data=mysqli_num_rows($perintah);
                              ?>
                              <?php echo "$data";?>
                            </span>
                          </li>
                          <li class="list-group-item">
                            <a href="?page=alat#belanja">
                              Alat Pertanian
                            </a>
                            <span class="label label-primary pull-right" style="color: white; background-color: #000;">
                              <?php
                              include "conf/koneksi.php";
                              $id = isset($_GET['id']) ? $_GET['id'] : '';
                              $perintah=mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori = 'Alat Pertanian'");
                              $data=mysqli_num_rows($perintah);
                              ?>
                              <?php echo "$data";?>
                            </span>
                          </li>
                          <li class="list-group-item">
                            <a href="?page=pestisida#belanja">
                              Pestisida
                            </a>
                            <span class="label label-primary pull-right" style="color: white; background-color: #000;">
                              <?php
                              include "conf/koneksi.php";
                              $id = isset($_GET['id']) ? $_GET['id'] : '';
                              $perintah=mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori = 'Pestisida'");
                              $data=mysqli_num_rows($perintah);
                              ?>
                              <?php echo "$data";?>
                            </span>
                          </li>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php

          $page = @$_GET['page'];
          if ($page == "shop") {
            include "produk/all.php";
          }
          elseif ($page == "pupuk") {
            include "produk/pupuk.php";
          }
          elseif ($page == "bibit") {
            include "produk/bibit.php";
          }
          elseif ($page == "alat") {
            include "produk/alat.php";
          }
          elseif ($page == "pestisida") {
            include "produk/pestisida.php";
          }
          elseif ($page == "keranjang") {
            include "model/p_keranjang.php";
          }
          elseif ($page == "transaksi") {
            include "model/p_transaksi.php";
          }

          elseif ($page == "cari") {
            include "model/p_cari.php";
          }
          elseif ($page == "pembayaran") {
            include "model/p_pembayaran.php";
          }
          elseif ($page == "selesai") {
            include "model/p_selesai.php";
          }
          else{
            include "produk/all.php";
          }
          ?>
        </div>
      </div>
    </section>
  </body>
</html>

<?php
include "footer.php";
?>
