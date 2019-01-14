<?php

include "../conf/koneksi.php";
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
        ON gender.id_gender = member.id_gender";

$hasil = $koneksi->query($sql);

if (isset($_POST['submit'])){
  $id_member = $_POST['id_member'];
  $password = md5($_POST['password']);
}

$sql1 = "UPDATE member set id_member = '$id_member',

password = '$password'

WHERE id_member='$id_member'";

$q = $koneksi->query($sql1);

if($q === TRUE){
	echo '<script>alert("Success!");window.location=("../member/password");</script>';
}
else {
  echo "<script>history.go(-1)</script>";
}

$koneksi->close();

?>
