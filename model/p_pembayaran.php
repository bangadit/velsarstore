<?php
 include "conf/koneksi.php";
 if (!isset($_SESSION['sesi_login'])) {
	echo "<script>alert('Silahkan Login Dulu');</script>";
 	echo "<script>location='loginform.php';</script>";
}
	$cari= mysqli_query($koneksi, "SELECT * FROM transaksi order by id_transaksi desc");
	$h= mysqli_fetch_array($cari);
	$id_transaksi = $h['id_transaksi'];
	$jumlah = $h['jumlah'];
 $total = NULL;
 $post = $_POST;
 $numrows_invoice_db = 0;
 $invoice = $numrows_invoice_db + 1;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
                Order Summary
              </h3>
            </div>
          </div>
        </div>
   		<div class="col-sm-12 col-centered ">
 				<form id="summary_checkout" action="cart/checkout" method="POST">
    			<div class="row">
    				<div class="col-sm-12 mabot">
    					<table id="shopping-cart" width="100%">
    						<tbody>
                  <tr>
      							<th>Item</th>
      							<th>Stock</th>
      							<th>Qty.</th>
      							<th>Price</th>
      				      <th>Total</th>
				            <th>Disc</th>
				            <th>Total Price</th>
      							<th style="text-align:center;">Remove</th>
      						</tr>
    						</tbody>

                <?php
                if ($_SESSION['keranjang']) {
                          $id_produk = $_SESSION['keranjang'];
                        }
                $ambil = mysqli_query($koneksi, "SELECT * from produk where id='$id_produk'");
                while($data = mysqli_fetch_assoc($ambil)){
                $subharga = $data["harga"] * $jumlah;
                $total += $subharga;
                ?>

                <tbody style="margin-top: 10px">
									<tr style="border:1px solid #000; padding-bottom: 20px">
    								<td style="padding-top: 10px; padding-bottom: 10px;">
                      <?php echo $data["nama"]; ?>
                    </td>
    								<td>
                      <?php echo $data["stok"]; ?>
                    </td>
    								<td>
                      <?php echo $jumlah; ?>
                    </td>
    								<td>
                      IDR <?php echo number_format($data["harga"]); ?>
                    </td>
    								<td>
                      IDR <?php echo number_format($subharga); ?>
                    </td>
    								<td>IDR 0,00</td>
    								<td>
                      IDR <?php echo number_format($subharga); ?>
                    </td>
                    <td class="text-center">
                      <a href="#">
                        <img style=" width: 10px" src="assets/images/fa-times.png" =""="">
                      </a>
                    </td>
    							</tr>

    							<tr>
    								<td colspan="6">Voucher Discount (0)%</td>
    								<td colspan="2">IDR 0,00</td>
    							</tr>
    							<tr>
    								<td colspan="6">Subtotal</td>
    								<td colspan="2">IDR <?php echo number_format($subharga); ?></td>
    							</tr>
    							<tr>
    								<td colspan="6">Shipping Cost</td>
    								<td colspan="2">IDR 0,00</td>
    							</tr>
    							<tr>
    								<td colspan="6">Total</td>
    								<td colspan="2">IDR <?php echo number_format($total);?></td>
    							</tr>
    						</tbody>
                <?php } ?>
    					</table>
    				</div>
    			</div>

    			<div class="row">
    				<div class="col-sm-12">
    					<div class="row">
                <?php
                $sql = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
                $hasil = $koneksi->query($sql);
                if ($hasil->num_rows) {
                  while ($cetak = $hasil->fetch_assoc()) {
                    extract($cetak);
                    echo
                    '
                    <div class="col-sm-10">
        							'.$nama_pembeli.'
                      <br>
        							'.$alamat.'
                      <br>
        							'.$telepon.'
                    </div>
                    ';
                  }
                }
                ?>
    					</div>
    				</div>
    			</div>
          <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-4" style="top:10px;" id="info-check-vou">
    					<input type="text" class="form-control" id="id_voucher_code" name="voucher_name" placeholder="Voucher Code">
    				</div>
    				<div class="col-sm-2">
    					<input id="input2" class="btn btn-fefault btn-side black btn-chechk-vou" type="button" value="Check">
    				</div>

            <div class="col-md-4 pull-right">
              <a href="?page=selesai#belanja" name="lanjut" class="btn btn-fefault btn-side black">Checkout</a>
    				</div>
          </div>
   			</form>
       </div>
   	</div>
   </div>
 </section>
 </body>
</html>
