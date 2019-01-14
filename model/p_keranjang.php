<?php
include "conf/koneksi.php";
$total = NULL;
if (!isset($_SESSION['sesi_login'])) {
  echo "<script>alert('Silahkan Login Dulu');</script>";
  echo "<script>location='member/login';</script>";
}
if (empty($_SESSION["keranjang"]) || !isset($_SESSION['keranjang'])) {
  echo "<script>alert('Keranjang Belanja Kosong, Silahkan Belanja');</script>";
  echo "<script>location='shop?page=shop#belanja';</script>";
}
else {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <title></title>
</head>
<body>
  <section>
    <div class="col-sm-10">
    	<div class="row">
  			<div class="col-md-12 col-centered text-left topline margintop" style="margin-top: 20px;">
         <div class="row">
      		 <div class="col-md-4 text-center" style="background:#fff; top: -40px">
             <h3 class="">
               Your Shopping Cart
             </h3>
             <?php
             if ($_SESSION['sesi_login']) {
               $id_user = $_SESSION['sesi_login'];
             }
               $hasil= mysqli_query($koneksi, "SELECT * FROM member WHERE id_member='$id_member'");
               $pdata= mysqli_fetch_array($hasil);

             $fname     = $pdata['fname'];
             $lname     = $pdata['lname'];
             $email    = $pdata['email'];
             $telepon  = $pdata['telepon'];
             $id_province  = $pdata['id_province'];
             $id_city  = $pdata['id_city'];
             $address  = $pdata['address'];


             ?>
           </div>
         </div>
       </div>
  		<div class="col-sm-12 col-centered ">
        <!-- <span style="color: red">
          Maaf untuk sekarang hanya bisa membeli 1 jenis barang saja pertransaksi, anda beli lebih dari 1 ? baca FAQ
        </span> -->
				<form method="POST" action="" id="form_cart">
    			<div class="row">
    				<div class="col-sm-12">
    					<table id="shopping-cart" width="100%">
    						<tbody><tr style="background-color: #000; color: #fff; padding: 10px">
    							<th style="padding: 10px 10px 10px 10px">Item</th>
    							<th style="padding: 10px 10px 10px 10px">Stock</th>
    							<th style="padding: 10px 10px 10px 10px">Qty.</th>
    							<th style="padding: 10px 10px 10px 10px">Price</th>
                  <th style="padding: 10px 10px 10px 10px">Bank</th>
                  <th style="padding: 10px 10px 10px 10px; text-align: right;">Total Price</th>
    							<th style="padding: 10px 10px 10px 10px" class="text-center">Remove</th>
    						</tr>
    						</tbody>

                <?php
                if ($_SESSION['keranjang']) {
                  $id_produk = $_SESSION['keranjang'];

                }
                $ambil = mysqli_query($koneksi, "SELECT * from produk where id='$id_produk'");
                while($data = mysqli_fetch_assoc($ambil)){
                ?>

                <tbody>
  								<tr style="">
                		<td style="padding: 30px 10px 30px 10px;">
                      <?php echo $data["nama"]; ?>
                    </td>
                		<td style="padding: 30px 10px 30px 10px;">
                      <?php echo $data["stok"]; ?>
                    </td>
                		<td>
                      <input class="form-control miniselect" type="number" name="jumlah" min="1" value="1">
                    </td>
                		<td>IDR
                      <?php echo number_format($data["harga"]); ?>
                    </td>
                    <td>
                      <select class="form-control" name="metode" required>
                        <option value="BRI">Transfer BRI</option>
                        <option value="Mandiri">Transfer Mandiri</option>
                      </select>
                    </td>
                    <td style="text-align: right;">
                      IDR <?php echo number_format($data["harga"]); ?>
                    </td>
                		<td class="text-center">
                      <a href="model/p_hapuskeranjang.php?id=<?php echo($id_produk) ?>">
                        <img style=" width: 10px" src="assets/images/fa-times.png" =""="">
                      </a>
                    </td>
                	</tr>



    							<tr style="border-top: 1px solid #000;">
    								<td colspan="2" style=" padding-top: 30px">
                      Total
                    </td>
    								<td></td>
    								<td colspan="2"></td>
    								<td style=" padding-top: 30px; text-align:right;">
                      IDR <?php echo number_format($data["harga"]); ?>
                    </td>
    							</tr>

                  <?php } ?>
    						</tbody>
    					</table>
    				</div>

            <div class="col-md-12 patop">
  						<div class="row">
  							<div class="col-sm-4 pull-left">
        					<a class="btn btn-fefault btn-side" style="width:100%" href="#">
                    Continue Shopping
                  </a>
        				</div>
        				<div class="col-sm-4 pull-right">
        					<button name="lanjut" class="btn btn-fefault btn-side black">
                    Proceed
                  </button>
        				</div>
              </div>
            </div>
          </div>
  			</form>
      </div>
      <?php
      if (isset($_POST['lanjut'])) {
      $jumlah = $_POST['jumlah'];
      $subharga = $data["harga"] * $jumlah;
      $total += $subharga;
      $metode = $_POST['metode'];
      $sql = mysqli_query($koneksi, "SELECT * from produk where id='$id_produk'");
      $adata = mysqli_fetch_assoc($sql);
      $nama_produk= $adata["nama"];
      $harga    = $adata["harga"];
      $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id_produk'");
      while ($data = mysqli_fetch_array($query)) {
      $sisa = $data['stok'];
      }
      if ($jumlah > $sisa) {
      echo "<script>alert('Jumlah Melebihi Stok Yang Tersedia !');</script>";
      } else {
      $now  = date('d-m-Y');
      $tot  = $harga * $jumlah;
      $beli   = mysqli_query($koneksi, "INSERT INTO transaksi VALUES (NULL,'$id_member','$fname','$telepon','$address','$now',' ','$metode','$email','$id_produk','$nama_produk','$harga','$jumlah','$tot','Menunggu Konfirmasi')");

      $pdk  = mysqli_query($koneksi, "UPDATE produk SET stok=(stok-$jumlah) WHERE id='$id_produk'");

        }
      if ($beli && $pdk) {
        echo "<script>alert('Pesanan Anda Segera Di Proses');</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=pembayaran#belanja'>";
      } else {
        echo "<script>alert('Transaksi GAGAL...');</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=keranjang#belanja'>";
      }
      }
      ?>
  	</div>
  </div>
</section>
</body>
</html>
<?php } ?>
