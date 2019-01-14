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
        					<div class="col-md-4 text-center" style="background:#fff; top: -40px"><h3 class="">Payment Confirmation</h3></div>
      					</div>
      				</div>

              <div class="col-sm-9 margintop col-centered mabot text-center">
    						<span style="color:red"></span>
    						<span style="color:red"></span>
  						</div>

              <div class="col-sm-9 margintop col-centered">
                <form action="../model/p_confirm" method="post">
                  <div class="form-group mabot">
                    <div class="form-group mabot">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="nomor" class="pa">
                            Nomor Order
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="nomor" placeholder="Nomor Order">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mabot">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="rekening" class="pa">
                            Nama Pemilik Rekening
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="rekening" placeholder="Nama pemilik rekening yang digunakan untuk transfer">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mabot">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="bank" class="pa">
                            Bank
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="bank" placeholder="Bank yang digunakan untuk melakukan pembayaran">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mabot">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="total" class="pa">
                            Total Pembayaran
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="total" placeholder="Jumlah transfer sesuai dengan order">
                        </div>
                      </div>
                    </div>

                        <div class="row">
                          <div class="col-md-10 pull-right">
                            <input class="btn btn-fefault btn-side black" name="submit" type="submit" value="submit">
                          </div>
                        </div>
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
