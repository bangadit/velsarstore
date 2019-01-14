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
        					<div class="col-md-4 text-center" style="background:#fff; top: -40px"><h3 class="">Dashboard</h3></div>
      					</div>
      				</div>

              <div class="col-sm-9 margintop col-centered mabot text-center">
    						<span style="color:red"></span>
    						<span style="color:red"></span>
  						</div>

              <div class="col-sm-9 margintop col-centered">
      					<form method="POST" id="form-login" action="#">
      						<div class="form-group mabot">
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
                                while ($cetak = $hasil->fetch_assoc()) {
                                  extract($cetak);
                                  echo
                                  '
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-4"><label class="pa" for="fname">First Name</label></div>
                        					    <div class="col-md-8"><label class="pa" for="fname">'.$fname.'</label></div>
                        					  </div>
                      					  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-4"><label class="pa" for="fname">Last Name</label></div>
                        					    <div class="col-md-8"><label class="pa" for="fname">'.$lname.'</label></div>
                        					  </div>
                      					  </div>

                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-4"><label class="pa" for="fname">Email</label></div>
                        					    <div class="col-md-8"><label class="pa" for="fname">'.$email.'</label></div>
                        					  </div>
                      					  </div>

                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-4"><label class="pa" for="fname">Telephone</label></div>
                        					    <div class="col-md-8"><label class="pa" for="fname">'.$telepon.'</label></div>
                        					  </div>
                      					  </div>

                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-4"><label class="pa" for="fname">Birth Date</label></div>
                        					    <div class="col-md-8"><label class="pa" for="fname">'.$day.' '.$month.' '.$year.'</label></div>
                        					  </div>
                      					  </div>

                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-4"><label class="pa" for="fname">Gender</label></div>
                        					    <div class="col-md-8"><label class="pa" for="fname">'.$gender.'</label></div>
                        					  </div>
                      					  </div>

                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <a href="edit" style="color: red;">
                                          Edit
                                        </a>
                                      </div>
                        					  </div>
                      					  </div>
                                  ';
                                }
                            }
                    ?>
                  </div>
                </form>
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
