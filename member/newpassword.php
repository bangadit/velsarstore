<?php
include "header.php";
?>

<?php

if (!isset($_SESSION['id_member'])) {
  echo '<script>window.location=("login");</script>';
}

else{
  include "../conf/koneksi.php";
  $id_member = $_SESSION['id_member'];
  $sql = "SELECT * FROM member WHERE id_member = '$id_member'";
  $hasil=$koneksi->query($sql);
  $cetak=$hasil->fetch_assoc();
  extract($cetak);
}
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
					<div class="row">
            <div class="col-md-10 col-centered text-left topline margintop" style="margin-top: 20px;">
    					<div class="row">
      					<div class="col-md-4 text-center" style="background:#fff; top: -40px"><h3 class="">Change Password</h3></div>
    					</div>
    				</div>

            <div class="col-sm-9 margintop col-centered mabot text-center">
  						<span style="color:red"></span>
  						<span style="color:red"></span>
						</div>

            <div class="col-sm-9 margintop col-centered">
              <?php
                $sql = "SELECT * FROM member
                        LEFT JOIN province
                        ON province.id_province = member.id_province
                        LEFT JOIN city
                        ON city.id_city = member.id_city
                        LEFT JOIN day
                        ON day.id_day = member.id_day
                        LEFT JOIN month
                        ON month.id_month = member.id_month
                        LEFT JOIN year
                        ON year.id_year = member.id_year
                        LEFT JOIN gender
                        ON gender.id_gender = member.id_gender
                        WHERE id_member = '$id_member'";
                $hasil = $koneksi->query($sql);
                if ($hasil->num_rows) {
                  echo "<form action='../model/p_newpassword' method='POST'>";
                	while ($baris = $hasil->fetch_array()) {
                    $id_member = $baris['id_member'];
                    $password = $baris['password'];
                		?>

                    <div hidden class="form-group">
                      <div class="row">
                        <div class="col-md-4"><label class="pa" for="inp_password">ID</label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="id_member" value="<?php echo $id_member ?>" readonly>
                        </div>
                      </div>
     					      </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4"><label class="pa" for="inp_password">New Password</label></div>
                        <div class="col-md-8"><input type="password" class="form-control" min="6" name="password">
                        </div>
                      </div>
     					      </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-8 pull-right">
                          <input class="btn btn-fefault btn-side black" name="submit" type="submit" value="submit">
                        </div>
                      </div>
                    </div>

                    <?php
                  }
                }
                $koneksi->close();
                ?>
            </div>
            <div class="col-sm-9 margintop col-centered"></div>
					</div>
				</div>
      </div>
    </div>
  </body>
</html>

<?php
include 'footer.php'
?>
