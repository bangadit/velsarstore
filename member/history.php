<?php
include "header.php";
?>

<?php
 include "../conf/koneksi.php";
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
    <title>Velsar Store - Member | Velser</title>
  </head>
  <body>
    <div class="container">
    		<div class="row row-centered">
  				<div class="col-sm-3 margintop" style="background: #ccc; padding-top:20px; padding-bottom: 20px">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="dashboard">Dashboard</a></li>
              <li><a href="password">Change Password</a></li>
              <li><a href="history">Order History</a></li>
              <li><a href="confirm">Payment Confirmation</a></li>
              <li><a href="#">Address Book</a></li>
              <li><a href="../model/p_logout">Logout</a></li>
            </ul>
          </div>

          <div class="col-sm-9 margintop">
  					<div class="col-md-10 col-centered text-left topline margintop" style="margin-top: 20px;">
  						<div class="row">
  							<div class="col-md-4 text-center" style="background:#fff; top: -40px">
  								<h3 class="">Order History</h3>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col-md-12">
  								<table id="shopping-cart" width="100%">
        						<tbody>
                      <tr style="background-color: #000; color: #fff; padding: 10px">
            						<th style="padding: 10px 10px 10px 10px">No</th>
          							<th style="padding: 10px 10px 10px 10px">Order Code</th>
          							<th style="padding: 10px 10px 10px 10px">Total Price</th>
          							<th style="padding: 10px 10px 10px 10px">Invoice</th>
          							<th style="padding: 10px 10px 10px 10px">Status</th>
                        <th style="padding: 10px 10px 10px 10px">Batal</th>
                        <th style="padding: 10px 10px 10px 10px">Selesai</th>
        						</tr>
      						</tbody>

                  <tbody>
                    <?php
                      if ($_SESSION['sesi_login']) {
                            $id_user = $_SESSION['sesi_login'];
                          }
                      $perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Menunggu Konfirmasi'");
                      while($data = mysqli_fetch_row($perintah)){
                      echo("<tr>");
                      echo("<td style='padding: 30px 10px 30px 10px;'>$data[0]</td>");
                      echo("<td style='padding: 30px 10px 30px 10px;'>2018$data[11]$data[0]</td>");
                      echo("<td>IDR $data[13]</td>");
                      echo(
                        "<td>
                        <a href='#'>
                    			<i class='fa fa-info-circle'></i>
                      			Detail
                    		</a>
                        </td>");
                      echo("<td>$data[14]</td>");
                      echo("<td><a href='../model/p_batal?id_transaksi=$data[0]' class='btn btn-danger btn-xs'>Batal</a></td>");
                      echo("<td><a href='../model/p_sampai?id_transaksi=$data[0]' class='btn btn-success btn-xs'>Selesai</a></td>");
                      echo("</tr>");
                      echo("<tr style='boder-top: 1px solid #000'>");
                      echo("<td></td>");
                      echo("</tr>");
                    }
                    ?>
                    <?php
                      if ($_SESSION['sesi_login']) {
                            $id_user = $_SESSION['sesi_login'];
                          }

                      $perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Dibatalkan Oleh Pembeli'");
                      while($data = mysqli_fetch_row($perintah)){
                        echo("<tr>");
                        echo("<td style='padding: 30px 10px 30px 10px;'>$data[0]</td>");
                        echo("<td style='padding: 30px 10px 30px 10px;'>2018$data[11]$data[0]</td>");
                        echo("<td>IDR $data[13]</td>");
                        echo(
                          "<td>
                          <a href='#'>
                      			<i class='fa fa-info-circle'></i>
                        			Detail
                      		</a>
                          </td>");
                        echo("<td>$data[14]</td>");
                        echo("</tr>");
                        echo("<tr style='boder-top: 1px solid #000'>");
                        echo("<td></td>");
                        echo("</tr>");
                    }
                    ?>
                    <?php
                      if ($_SESSION['sesi_login']) {
                            $id_user = $_SESSION['sesi_login'];
                          }

                      $perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Dibatalkan Oleh Admin'");
                      while($data = mysqli_fetch_row($perintah)){
                        echo("<tr>");
                        echo("<td style='padding: 30px 10px 30px 10px;'>$data[0]</td>");
                        echo("<td style='padding: 30px 10px 30px 10px;'>2018$data[11]$data[0]</td>");
                        echo("<td>IDR $data[13]</td>");
                        echo(
                          "<td>
                          <a href='#'>
                            <i class='fa fa-info-circle'></i>
                              Detail
                          </a>
                          </td>");
                        echo("<td>$data[14]</td>");
                        echo("</tr>");
                        echo("<tr style='boder-top: 1px solid #000'>");
                        echo("<td></td>");
                        echo("</tr>");
                    }
                    ?>

                    <?php
                      if ($_SESSION['sesi_login']) {
                            $id_user = $_SESSION['sesi_login'];
                          }

                      $perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Barang Sedang Dikirim'");
                      while($data = mysqli_fetch_row($perintah)){
                        echo("<tr>");
                        echo("<td style='padding: 30px 10px 30px 10px;'>$data[0]</td>");
                        echo("<td style='padding: 30px 10px 30px 10px;'>2018$data[11]$data[0]</td>");
                        echo("<td>IDR $data[13]</td>");
                        echo(
                          "<td>
                          <a href='#'>
                            <i class='fa fa-info-circle'></i>
                              Detail
                          </a>
                          </td>");
                        echo("<td>$data[14]</td>");
                        echo("<td></td>");
                        echo("<td><a href='../model/p_sampai?id_transaksi=$data[0]' class='btn btn-success btn-xs'>Selesai</a></td>");
                        echo("</tr>");
                        echo("<tr style='boder-top: 1px solid #000'>");
                        echo("<td></td>");
                        echo("</tr>");
                    }
                    ?>

                    <?php
                      if ($_SESSION['sesi_login']) {
                            $id_user = $_SESSION['sesi_login'];
                          }

                      $perintah = mysqli_query($koneksi, "SELECT * FROM transaksi where id_pembeli = '$id_user' AND status='Barang Telah Sampai'");
                      while($data = mysqli_fetch_row($perintah)){
                        echo("<tr>");
                        echo("<td style='padding: 30px 10px 30px 10px;'>$data[0]</td>");
                        echo("<td style='padding: 30px 10px 30px 10px;'>2018$data[11]$data[0]</td>");
                        echo("<td>IDR $data[13]</td>");
                        echo(
                          "<td>
                          <a href='#'>
                            <i class='fa fa-info-circle'></i>
                              Detail
                          </a>
                          </td>");
                        echo("<td>$data[14]</td>");
                        echo("<td></td>");
                        echo("</tr>");
                        echo("<tr style='boder-top: 1px solid #000'>");
                        echo("<td></td>");
                        echo("</tr>");
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-sm-9 margintop col-centered"></div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

<?php
include "footer.php";
?>
