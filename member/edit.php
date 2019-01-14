<?php
include 'header.php'
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
      					<div class="col-md-4 text-center" style="background:#fff; top: -40px"><h3 class="">Edit</h3></div>
    					</div>
    				</div>

            <div class="col-sm-9 margintop col-centered mabot text-center">
  						<span style="color:red"></span>
  						<span style="color:red"></span>
						</div>

            <div class="col-sm-9 margintop col-centered">
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
                    echo "<form action='../model/p_update' method='POST'>";
                    while ($baris = $hasil->fetch_array()) {
                      $id_member = $baris['id_member'];
                      $fname = $baris['fname'];
                      $lname = $baris['lname'];
                      $telepon = $baris['telepon'];
                      $id_province = $baris['id_province'];
                      $id_city = $baris['id_city'];
                      $address = $baris['address'];
                      ?>

                      <div hidden class="form-group mabot">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="pa" for="inp_password">
                              ID
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" class="form-control" name="id_member" value="<?php echo $id_member ?>">
                          </div>
                        </div>
       					      </div>


                      <div class="form-group mabot">
                        <div class="row">
                          <div class="col-md-2"><label class="pa" for="fname">Fist Name</label></div>
                          <div class="col-md-10">
                            <input type="text" class="form-control" name="fname" value='<?php echo "$baris[fname]";?>'>
                          </div>
                        </div>
                      </div>

                      <div class="form-group mabot">
                        <div class="row">
                          <div class="col-md-2"><label class="pa" for="lname">Last Name</label></div>
                          <div class="col-md-10"><input type="text" class="form-control" name="lname"
                            value='<?php echo "$baris[lname]";?>'></div>
                        </div>
                      </div>

                      <div class="form-group mabot">
                        <div class="row">
                          <div class="col-md-2"><label class="pa" for="telepon">Telephone</label></div>
                          <div class="col-md-10"><input type="text" class="form-control" name="telepon"
                            value='<?php echo "$baris[telepon]";?>'></div>
                        </div>
                      </div>

                      <div class="form-group mabot">
                        <div class="row">
                          <div class="col-md-2">
                            <label for="id_province" class="pa">
                              Province
                            </label>
                          </div>
                          <div class="col-md-10">
                            <select class="form-control" name="id_province" id="id_province">
                              <?php
                              $sql = "SELECT * FROM province ORDER BY province ASC";
                              $hasil = $koneksi->query($sql);
                              if ($hasil->num_rows) {
                                while ($cetak = $hasil->fetch_assoc()) {
                                  extract($cetak);
                                  if ($baris['id_province'] == "$id_province") echo "<option value='$id_province' selected>$province</option>";
                                  else echo "<option value='$id_province'>$province</option>";
                                }
                              }
                              ?>
                            </select>
                            <div class="select__arrow"></div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group mabot">
                        <div class="row">
                          <div class="col-md-2">
                            <label for="id_city" class="pa">
                              City
                            </label>
                          </div>
                          <div class="col-md-10">
                            <select class="form-control" name="id_city" id="id_city">
                              <?php
                              $sql = "SELECT * FROM city ORDER BY city ASC";
                              $hasil = $koneksi->query($sql);
                              echo '<option value="5">-Select city-</option>';
                              if ($hasil->num_rows) {
                                while ($cetak = $hasil->fetch_assoc()) {
                                  extract($cetak);
                                  if ($baris['id_city'] == "$id_city") echo "<option value='$id_city' selected>$city</option>";
                                }
                              }
                              ?>
                            </select>
                            <div class="select__arrow"></div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group mabot">
                        <div class="row">
                          <div class="col-md-2">
                            <label for="address" class="pa">
                              Address
                            </label>
                          </div>
                          <div class="col-md-10">
                            <textarea class="form-control" type="text" name="address"><?php echo "$baris[address]";?></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-10 pull-right">
                          <input class="btn btn-fefault btn-side black" name="submit" type="submit" value="submit">
                        </div>
                      </div>


                      <?php
                    }
                  }
                  $koneksi->close();
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
include 'footer.php'
?>
