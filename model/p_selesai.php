<?php
 include "conf/koneksi.php";
  if (!isset($_SESSION['sesi_login'])) {
  echo "<script>alert('Silahkan Login Dulu');</script>";
  echo "<script>location='loginform.php';</script>";
}
  $cari= mysqli_query($koneksi, "SELECT * FROM transaksi order by id_transaksi desc");
  $h= mysqli_fetch_array($cari);
  $id_transaksi = $h['id_transaksi'];
  $id_produk = $h['id_produk'];
  $jumlah = $h['jumlah'];
  $harga = $h['harga'];
 $total = NULL;
 $post = $_POST;
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
                Order Success
              </h3>
            </div>
          </div>
        </div>

   		<div class="col-sm-12 col-centered ">
 				<form id="summary_checkout" action="cart/checkout" method="POST">
    			<div class="row">
    				<div class="col-sm-12 mabot">
              <div>
        				Congratullation, your order has been success!! please check your Order Summary here
        			</div>
              <h1>Order Number:

                <?php echo "2018"; echo "$harga";?><?php echo "$id_transaksi"; ?></h1>
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
    								<td colspan="6">Unique Code</td>
    								<td colspan="2">IDR 0,00</td>
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
            <br>
    			</div>
   			</form>
        <form method="POST" action="member/confirm">
  			<b>
          Please select your payment method :
        </b>
        <br>
        <ul style="margin-top:5px; background-color: #0b2343;" id="tab" class="nav nav-tabs">
          <li class="active">
            <a href="#BT" data-toggle="tab"><input type="radio" name="pm" value="BT" checked="checked">
              Bank Transfer
            </a>
          </li>
        </ul>

        <div class="panel-group visible-xs" id="tab-accordion"></div>
        <div id="tabContent" class="tab-content">
	        <div class="tab-pane fade in active" id="BT">
            <pre>Velsar Store's BRI Account :
<img src="assets/images/bri.png" style="width: 100px">
No.Rek : 573001013793533
A.N    : ADITYA PUTRA IRAWAN
            </pre>
	        </div>
  		    </div>
  			<br><br>

  			<div class="row">

  						<div class=" col-md-7 patop">
  						<div>Please click the button to confirmation payment, if you </div>
  						<button type="submit" class="btn btn-fefault btn-side black">Payment Confirmation</button>

  						</div>
  						</div>
  			</form>
       </div>




   	</div>
   </div>
 </section>













 </body>
</html>
