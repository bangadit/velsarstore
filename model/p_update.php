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
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $telepon = $_POST['telepon'];
  $id_province = $_POST['id_province'];
  $id_city = $_POST['id_city'];
  $address = $_POST['address'];
}

$sql1 = "UPDATE member set id_member = '$id_member',
fname = '$fname',
lname = '$lname',
telepon = '$telepon',
id_city = '$id_city',
id_province = '$id_province',
address = '$address'

WHERE id_member='$id_member'";

$q = $koneksi->query($sql1);

if($q === TRUE){
	echo '<script>window.location=("../member/dashboard");
  </script>';
}
else {
  echo "Terjadi kesalahan ".$koneksi->error;
}

$koneksi->close();

?>
