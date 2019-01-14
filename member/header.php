<?php
session_start();
include "../conf/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="aditya putra irawan">
    <meta name="description" content="velsar store">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/price-range.css">
    <link rel="stylesheet" href="../assets/css/component.css">
    <link rel="stylesheet" href="../assets/css/etalage.css">
    <link rel="stylesheet" href="../assets/css/lazyYT.css">
    <link rel="shortcut icon" href="../assets/images/logo_velsar.png">
    <script src="../assets/js/jquery.etalage.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../assets/js/113.jquery.min.js"></script>
    <script src='../assets/js/jquery-1.8.3.min.js'></script>
    <script src='../assets/js/jquery.elevatezoom.js'></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#id_province').on('change',function(){
        var provinceName = $(this).val();
        if(provinceName){
            $.ajax({
                type:'POST',
                url:'../model/p_ajaxdata',
                data:'id_province='+provinceName,
                success:function(html){
                  console.log(html);
                  $('#id_city').html(html);
                }
            });
        }else{
            $('#id_city').html('<option value="5">-Select city-</option>');
        }
      });
    });
    </script>
    <!-- <script type="text/javascript" async="" src="http://p03.notifa.info/3fsmd3/request?id=1&amp;enc=9UwkxLgY9&amp;params=4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5md%2fKWzJEn%2bk5F4Wj6N3%2bOA00WVkkUOpNUzFVkjR4bAqUFsNxf%2fE%2bD%2f6Up5UdSz%2f5v7REQ0fhrhYVMkkxKk%2bGfzTTVemk8ch6GJJPHONyDYJJGjb%2bT6S%2fPY0GLHMC6CO3%2fNTIhhftdGlc1ZbNR7EPCU%2b%2fEK2NOflZ6%2bkNIyjFoyCs7LSvGEcGsnqflNXtXNejoxjszDagUYTVmfHG4aXc0dzWqaCAkOcI1Z%2fR1YHLOKfZVIfO%2bmHmQ8vs6s5pq%2bqeWclJcCQ7e0X3ZPMYe2Pwo%2bj7fQRl9u4SGFveSWMzVBjx%2b4%2fDgnnb3rwCwZhQhj5KkEq1LoAb3fkdDoWV1d%2fQL5VDgZ%2boyVVapjIS97w1dbU3tf8CgUTrHjRsr1KJeYdMkGsrFwudXnzuDHmZ7rTwVy5wyVVIyyiTERkEanIz6IVLaA28vK7W5arbXR7Wfk9bJJF%2bQPDkdxD8OEi4PGmb6k8XIXxwyx7vGZ3vGlmdVqmvPUfVeUtomVeB55p1NWNNfCqK7L1nEp8Undl%2bnb2lbEwHORR%2bGiXs3&amp;idc_r=78098681299&amp;domain=erigostore.id&amp;sw=1920&amp;sh=1080"></script>
    <style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.zopim { display: none !important }</style> -->
  </head>
  <body>
    <header id="header" class="marron-velsar header-dekstop">
      <div class="header_top"><!--header_top-->
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="searchtop pull-right">
                <ul class="nav nav-pills">
                  <li><a href="../shop?page=keranjang#belanja">CART </a></li>
                  <?php
                  if (isset($_SESSION["sesi_login"])):
                  ?>
                  <li>
                    <a href="dashboard">
                      <?php
                        if ($_SESSION['sesi_login']) {
                          $id_member = $_SESSION['sesi_login'];
                        }
                        $sql = mysqli_query($koneksi, "SELECT * FROM member WHERE id_member='$id_member'") or die(mysql_error());
                        $data = mysqli_fetch_array($sql);
                      ?>
                      <?php
                      echo "hello, ";
                        echo $data['fname'];
                      ?>
                    </a>
                  </li>
                  <?php else: ?>
                    <li>
                      <a href="login">
                        SIGN IN/SIGN UP
                      </a>
                    </li>
                  <?php endif ?>

                  <li>
                    <form class="searchform" action="#" method="post">
                      <input type="text" name="search" placeholder="Search">
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row row-righto">
                    <div class="col-sm-12">
                        <div class="logo centered-image">
                            <a href="../index"><img src="../assets/images/velsar.png" alt="" width="132"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu centered">
                            <ul class="nav navbar-nav navbar-collapse collapse" style="height: 1px;">
                                <li><a href="../shop">SHOP</a></li>
                                <li><a href="../campaign">CAMPAIGN</a></li>
                                <li><a href="../story">STORY</a></li>
                                <li><a href="../tour">TOUR</a></li>
                                <li><a href="../about">ABOUT</a></li>
                              </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header>

    <header class="header-mobile">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="navbar-header menu-mobile">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="../index" style="color:#fff"><span>VELSAR STORE</span></a>
                <a href="#" style="color: #fff;margin-right:10px;" class="pull-right">
                    <span></span>
                <img style=" width: 20px" src="../assets/images/shopping-cart.png" =""=""></a>
            </div>
        </div>
        <div class="nav-mobile">
                    <ul class="nav navbar-nav navbar-collapse collapse" style="height: 1px;">

                        <?php
                        if (isset($_SESSION["sesi_login"])):
                        ?>
                        <li class="mobile">
                          <a href="dashboard">
                            <?php
                              if ($_SESSION['sesi_login']) {
                                $id_member = $_SESSION['sesi_login'];
                              }
                              $sql = mysqli_query($koneksi, "SELECT * FROM member WHERE id_member='$id_member'") or die(mysql_error());
                              $data = mysqli_fetch_array($sql);
                            ?>
                            <?php
                            echo "hello, ";
                              echo $data['fname'];
                            ?>
                          </a>
                        </li>
                        <?php else: ?>
                          <li>
                            <a href="login">
                              SIGN IN/SIGN UP
                            </a>
                          </li>
                        <?php endif ?>
                        <li><a href="../index">HOME</a></li>
                        <li><a href="../shop">SHOP</a></li>
                        <li><a href="../campaign">CAMPAIGN</a></li>
                        <li><a href="../story">STORY</a></li>
                        <li><a href="../tour">TOUR</a></li>
                        <li><a href="../about">ABOUT</a></li>

                    </ul>
                </div>
    </header>

    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
    <script src="../assets/js/modernizr.custom.js"></script>
    <script src="../assets/js/masonry.pkgd.min.js"></script>
        <script src="../assets/js/imagesloaded.js"></script>
        <script src="../assets/js/classie.js"></script>
         <script src="../assets/js/AnimOnScroll.js"></script>
         <script>
             new AnimOnScroll( document.getElementById( 'grid' ), {
                 minDuration : 0.4,
                 maxDuration : 0.7,
                 viewportFactor : 0.2
             } );
         </script>

         <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b4f2135df040c3e9e0baf65/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->




         <script src="../assets/front/js/lazyYT.js"></script>
         <script>
         $( document ).ready(function() {
             $('.js-lazyYT').lazyYT('AIzaSyCawA87g_pgTbSNPhiWAemy-mFKszJGl4M');
         });
         </script>



  </body>
</html>
