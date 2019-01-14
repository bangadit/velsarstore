<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact - Contact | Velsar</title>
  </head>
  <body>

    <section>
	<div class="container patop" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2>Contact</h2>
		</div>
	</div>
		<div class="row">
			<div class="col-md-3" style="border-right:2px solid #c8c8c8; padding-bottom: 50px">
				<div style="border:1px solid #000; padding: 10px; line-height: 1" class="mabot">
					Need Help?<br><br>
					Chat us on LineID Below
				</div>

				<div style="border-top:1px solid #000;" class="patop">
				<div class="patop"><span style="font-weight: bold; " class="">Opening Hours</span></div>
				<div class="patop">-</div>
				<div class="patop">
				Monday - Friday<br>10AM - 6PM
				</div>
				<div class="patop">
				Saturday<br>10AM - 3PM
				</div>
				<div class="patop">
				Phone<br>0821 7732 9234
				</div>
				<div class="patop">
				Email<br>mail@adtputr.com
				</div>
				</div>
			</div>
						<div class="col-md-9">
  						<div class="row">
    						<div class="col-md-9 pull-right">
      						<form action="model/p_contact" method="post">

                    <div class="patop text-right"></div>

                    <div class="form-group mabot">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="name" class="pa">
                            Full Name
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="name" placeholder="First Name">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mabot">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="email" class="pa">
                            Email
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mabot">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="subject" class="pa">
                            Subject
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="subject" placeholder="Subject">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mabot">
                      <div class="row">
                        <div class="col-md-2">
                          <label for="message" class="pa">
                            Message
                          </label>
                        </div>
                        <div class="col-md-10">
                          <textarea style="height: 150px" class="form-control" name="message"></textarea>
                        </div>
                      </div>
                    </div>
                  <div class="form-group mabot">
                  <div class="row">
                    <div class="col-md-10 pull-right">
                      <input class="btn btn-fefault btn-side black" name="submit" type="submit" value="submit">
                    </div>
                  </div>
                </div>
        			    </form>
              </div>
    			    </div>
  				  </div>


			</div>
		</div>

</section>

  </body>
</html>

<?php
include "footer.php";
?>
