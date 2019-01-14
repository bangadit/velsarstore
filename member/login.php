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
        <div class="col-sm-12 centertext bottomline margintop">
          <h3 class="thin">SIGN IN</h3>
        </div>
        <div class="col-sm-12 centertext margintop">
          <span style="color:red;"></span>
          <span style="color:red;"></span>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <form action="../model/p_login" method="post">
            <div class="form-group">
              <label for="email" style="letter-spacing: 1px;">Email address</label>
              <input class="form-control" type="email" name="email" placeholder="Enter your Email adress">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>

            <div class="row">
              <div class="col-md-7">
                <div class="patop">
                  <p>Not a member yet, click <a href="register" style="color:#cc0000; font-weight: bold">here to sign up</a></p>
                  <div class="patop">
                    <p>
                      Forgot password? click <span style="cursor:pointer;color:#cc0000; font-weight: bold" data-toggle="modal" data-target="#modal-forgot">here</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <input style="width: 200px" id="input" class="btn btn-fefault btn-side black" name="submit" type="submit" value="submit">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-left patop"></div>
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
