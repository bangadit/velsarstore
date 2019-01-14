<?php
session_start();
	if(! isset($_SESSION['loginadmin'])){
	header('location:login.php');
	}
include "../conf/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TaniOl</title>
    <link href="../assets/admin/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/admin/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../assets/admin/ItemSlider/css/main-style.css" rel="stylesheet" />
    <link href="../assets/admin/css/style.css" rel="stylesheet" />
    <script src="../assets/admin/js/bootstrap.js"></script>
	<script src="../assets/admin/js/jquery.js"></script>
	<script src="../assets/admin/js/bootstrap.min.js"></script>
</head>
<body style="background:url(../assets/images/produk/grass2.jpg); background-attachment:fixed">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                <li class="pull-left"><a href="t_tampilproduk.php">Data Produk</a></li>
                <li class="pull-left"><a href="t_produk.php">Tambah Produk</a></li>
                <li class="pull-left"><a href="datapembeli.php">Data Pembelian</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION["loginadmin"])): ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

</div>
<br>
</body>
</html>
