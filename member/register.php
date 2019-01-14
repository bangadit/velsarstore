<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Velsar Store - Member | Velser</title>

  </head>
  <body>
    <div class="col-md-9 col-centered text-left topline margintop" style="margin-top: 80px;">
      <div class="row">
        <div class="col-md-3  text-center" style="background:#fff; top: -40px">
          <h3>Customer Info</h3>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row row-centered">
        <div class="col-sm-7 margintop col-centered">
          <form action="../model/p_register" method="post">
            <div class="form-group mabot">
              <div class="row">
                <div class="col-md-2">
                  <label for="fname" class="pa">
                    First Name
                  </label>
                </div>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                </div>
              </div>
            </div>

            <div class="form-group mabot">
              <div class="row">
                <div class="col-md-2">
                  <label for="lname" class="pa">
                    Last Name
                  </label>
                </div>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="lname" placeholder="Last Name">
                </div>
              </div>
            </div>

            <div class="form-group mabot">
              <div class="row">
                <div class="col-md-2">
                  <label for="email" class="pa">
                    Email address
                  </label>
                </div>
                <div class="col-md-10">
                  <input class="form-control" type="email" name="email" placeholder="Email address" required>
                </div>
              </div>
            </div>

            <div hidden class="form-group mabot">
              <div class="row">
                <div class="col-md-2">
                  <label for="address" class="pa">
                    Address
                  </label>
                </div>
                <div class="col-md-10">
                  <textarea class="form-control" type="text" name="address" placeholder="Address"></textarea>
                </div>
              </div>
            </div>

            <div class="form-group mabot">
              <div class="row">
                <div class="col-md-2">
                  <label for="telepon" class="pa">
                    Telephone
                  </label>
                </div>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="telepon" placeholder="Telephone">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label for="password" class="pa">
                    Password
                  </label>
                </div>
                <div class="col-md-10">
                  <input class="form-control" type="password" name="password" min="6" placeholder="Password" required>
                  <p>Must be at least 6 or more characters</p>
                </div>
              </div>
            </div>

            <div hidden class="form-group mabot">
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
                        echo '<option value="'.$cetak['id_province'].'">'.$cetak['province'].'</option>';
                      }
                    }else{
                      echo '<option value="">Province not available</option>';
                    }
                    ?>
                  </select>
                  <div class="select__arrow"></div>
                </div>
              </div>
            </div>

            <div hidden class="form-group mabot">
              <div class="row">
                <div class="col-md-2">
                  <label for="id_city" class="pa">
                    City
                  </label>
                </div>
                <div class="col-md-10">
                  <select class="form-control" name="id_city" id="id_city">
                    <option value="5">-Select city-</option>
                  </select>
                  <div class="select__arrow"></div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label for="date" class="pa">
                    Date of Birth
                  </label>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="id_day">
                    <?php
                    $sql = "SELECT * FROM day";
                    $hasil = $koneksi->query($sql);
                    if ($hasil->num_rows) {
                      while ($cetak = $hasil->fetch_assoc()) {
                        extract($cetak);
                        echo '<option value='.$id_day.'>'.$day.'</option>';
                      }
                    }
                    ?>
                  </select>
                  <div class="select__arrow"></div>
                </div>

                <div class="col-md-4">
                  <select class="form-control" name="id_month">
                    <?php
                    $sql = "SELECT * FROM month";
                    $hasil = $koneksi->query($sql);
                    if ($hasil->num_rows) {
                      while ($cetak = $hasil->fetch_assoc()) {
                        extract($cetak);
                        echo '<option value='.$id_month.'>'.$month.'</option>';
                      }
                    }
                    ?>
                  </select>
                  <div class="select__arrow"></div>
                </div>

                <div class="col-md-3">
                  <select class="form-control" name="id_year">
                    <?php
                    $sql = "SELECT * FROM year";
                    $hasil = $koneksi->query($sql);
                    if ($hasil->num_rows) {
                      while ($cetak = $hasil->fetch_assoc()) {
                        extract($cetak);
                        echo '<option value='.$id_year.'>'.$year.'</option>';
                      }
                    }
                    ?>
                  </select>
                  <div class="select__arrow"></div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label for="id_gender" class="pa">
                    Gender
                  </label>
                </div>
                <div class="col-md-10">
                  <select class="form-control" name="id_gender">
                    <?php
                    $sql = "SELECT * FROM gender";
                    $hasil = $koneksi->query($sql);
                    if ($hasil->num_rows) {
                      while ($cetak = $hasil->fetch_assoc()) {
                        extract($cetak);
                        echo '<option value='.$id_gender.'>'.$gender.'</option>';
                      }
                    }
                    ?>
                  </select>
                  <div class="select__arrow"></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-10 pull-right">
                <input class="btn btn-fefault btn-side black" name="submit" type="submit" value="submit">
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-6 margintop"></div>
      </div>
    </div>

  </body>
</html>

<?php
include "footer.php";
?>
