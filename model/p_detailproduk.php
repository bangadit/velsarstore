<?php
include "../member/header.php";
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
          <div class="col-sm-3" style="height: auto;">
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
                    <a href="../shop?page=shop#belanja"><h2>All</h2></a>
                  </div>

                  <div class="menu-side title">
                    <form action="../shop?page=cari#belanja" method="post" role="search">
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
                            <a href="../shop?page=pupuk#belanja">
                              Pupuk
                            </a>
                            <span class="label label-primary pull-right" style="color: white; background-color: #000;">
                              <?php
                              include "../conf/koneksi.php";
                              $id = isset($_GET['id']) ? $_GET['id'] : '';
                              $perintah=mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori = 'Pupuk'");
                              $data=mysqli_num_rows($perintah);
                              ?>
                              <?php echo "$data";?>
                            </span>
                          </li>
                          <li class="list-group-item">
                            <a href="../shop?page=bibit#belanja">
                              Bibit
                            </a>
                            <span class="label label-primary pull-right" style="color: white; background-color: #000;">
                              <?php
                              include "../conf/koneksi.php";
                              $id = isset($_GET['id']) ? $_GET['id'] : '';
                              $perintah=mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori = 'Bibit'");
                              $data=mysqli_num_rows($perintah);
                              ?>
                              <?php echo "$data";?>
                            </span>
                          </li>
                          <li class="list-group-item">
                            <a href="../shop?page=alat#belanja">
                              Alat Pertanian
                            </a>
                            <span class="label label-primary pull-right" style="color: white; background-color: #000;">
                              <?php
                              include "../conf/koneksi.php";
                              $id = isset($_GET['id']) ? $_GET['id'] : '';
                              $perintah=mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori = 'Alat Pertanian'");
                              $data=mysqli_num_rows($perintah);
                              ?>
                              <?php echo "$data";?>
                            </span>
                          </li>
                          <li class="list-group-item">
                            <a href="../shop?page=pestisida#belanja">
                              Pestisida
                            </a>
                            <span class="label label-primary pull-right" style="color: white; background-color: #000;">
                              <?php
                              include "../conf/koneksi.php";
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

          <div class="col-sm-9 padding-right detail-sip">
            <?php
        				include "../conf/koneksi.php";
        				$id=$_GET['id'];
        				$perintah="SELECT * FROM produk WHERE id='$id'";
        				$hasil=mysqli_query($koneksi, $perintah);
        				$data=mysqli_fetch_array($hasil);
            ?>
            <div class="product-details">
              <div class="col-sm-5" style="z-index: 999">
                <div>
                <script src="../assets/js/jquery.zoom.js"></script>
                <script>
              		$(document).ready(function(){
              			$('#ex1').zoom();
              			$('#ex2').zoom();
              			$('#ex3').zoom();
              			$('#ex4').zoom();
              			$('#ex5').zoom();
              			$('#ex6').zoom();
              			$('#ex7').zoom();
              			$('#ex8').zoom();
              		});
              	</script>

                <div class="tab-content">
                  <div class="tab-pane fade active in" id="image1">
                    <span class="zoom" id="ex1" style="position: relative; overflow: hidden;">
                      <img src="../assets/images/produk/<?=$data['foto'];?>" class="promage" style="width:300px;">
                      <img src="../assets/images/produk/<?=$data['foto'];?>" class="zoomImg" style="position: absolute; top: -319.788px; left: -654.9px; opacity: 0; width: 966px; height: 1459px; border: none; max-width: none; max-height: none;">
                    </span>
                  </div>
                </div>

                <div class="patop">
    							<ul class="nav nav-tabs" style="border-bottom: none;">
										<li class="active full-width nopadding thumbs">
    									<a href="#image1" data-toggle="tab" class="nopadding">
    										<img class="prothumb" src="../assets/images/produk/<?=$data['foto'];?>">
    									</a>
    								</li>
  								</ul>
                </div>
              </div>
            </div>

            <div class="col-sm-7">
              <form action="p_beli.php?id=<?php echo $data['id']; ?>" enctype="multipart/form-data" method="post">
  							<div class="row">
                  <div style=" position: absolute; background: #000; z-index: 100; color: #fff; font-size: 10px; padding: 5px">
                    STOK: <?php echo "$data[stok]";?>
                  </div>
                  <p></p>
								<h2 style="font-family: 'futura-bold'; font-size: 29px; margin-top:30px;">
                  <?php echo "$data[nama]";?>
                  <input type="hidden" name="id" id="product_id" value="2316">
                </h2>
                <h4 style="font-size: 21px;">
                  <?php echo "$data[kategori]";?>
                </h4>
								<h3 style=" font-size: 27px;">
                  IDR.
                  <?php
                    $angka = "$data[harga]";
                    $jumlahdesimal = "0";
                    $pemisahdesimal = ",";
                    $pemisahribuan = ".";
                    echo number_format($angka,$jumlahdesimal,$pemisahdesimal,$pemisahribuan);
                  ?>
                </h3>
								<br>

                <div style="">
                  <?php
                  if ($data['stok'] > 0) {
                  ?>
                  <button style="display:block" class="btn btn-fefault cart">
                    <img style=" width: 20px" src="../assets/images/shopping-cart.png" =""=""></a>
                      Beli Sekarang
									</button>
                  <?php } ?>
                </div>

  							<div class="col-sm-12 margintop">
  								<div class="category-tab shop-details-tab bottomline">
										<ul class="nav nav-tabs noborder">
											<li class="active col-sm-4 full-width nopadding">
												<a href="#desc" data-toggle="tab" class="nopadding">
													DESCRIPTION
												</a>
											</li>
										</ul>
                  </div>

                  <div class="tab-content">
  									<div class="tab-content">
											<div class="tab-pane fade active in" id="desc">
                        <p></p>
                        <p>
                          <em>
                            <?php echo "$data[kategori]";?>
                          </em>
                        </p>
                        <p>
                          • <?php echo "$data[deskripsi]";?>
                        </p>
                        <p></p>
											</div>
  									</div>
  								</div>
  							</div>
						</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
  </body>
</html>

<?php
include "../member/footer.php";
?>
