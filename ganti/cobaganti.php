<div class="col-md-9">
<div id="wrapshopcart">
 <center>
 <h2>Pembayaran</h2>
 <h4><p>Silahkan Transfer Ke No Rekening :</p></h4>
  <h3>BRI : 0023213 21 321321 32 1 </h3>
  <p>atau</p>
  <h3> Mandiri : 0081231 23 123123 12 3</h3>
 <h4><p>Sesuai Dengan Total Harga</p></h4>
  </center>

 <h3>Produk Yang Anda Beli : </h3>
 <table>
  <tr><th width="50%">Produk</th><th width="10%">Quantity</th><th width="20%">Harga</th><th width="20%">Subharga</th></tr>
    <?php
    if ($_SESSION['keranjang']) {
              $id_produk = $_SESSION['keranjang'];
            }
    $ambil = mysqli_query($koneksi, "SELECT * from produk where id='$id_produk'");
    while($data = mysqli_fetch_assoc($ambil)){
    $subharga = $data["harga"] * $jumlah;
    $total += $subharga;
    ?>
   <tr>
    <td><?php echo $data["nama"]; ?></td>
    <td><?php echo $jumlah; ?></td>
    <td>Rp. <?php echo number_format($data["harga"]); ?></td>
    <td>Rp. <?php echo number_format($subharga); ?></td>
  </tr>
  <?php } ?>
  <tr class="total"><td></td><td><b>Total</b></td><td><b>Rp. <?php echo number_format($total);?></b></td></tr>
 </table>
      <a href="?page=selesai#belanja" name="lanjut" class="btn btn-primary">Selesai</a>
</div>
</div>

</body>
</html>
