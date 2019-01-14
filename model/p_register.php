<?php
include "../conf/koneksi.php";

if (isset($_POST['submit'])) {
	$cekdulu = "SELECT * FROM member WHERE email='$_POST[email]'";
	$prosescek = mysqli_query($koneksi, $cekdulu);
	if (mysqli_num_rows($prosescek)>0) {
		echo "<script>alert('Email Sudah Digunakan');history.go(-1)</script>";
	}
	else {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$address = $_POST['address'];
		$telepon = $_POST['telepon'];
		$id_province = $_POST['id_province'];
		$id_city = $_POST['id_city'];
		$id_day = $_POST['id_day'];
		$id_month = $_POST['id_month'];
		$id_year = $_POST['id_year'];
		$id_gender = $_POST['id_gender'];

		$sql = "INSERT INTO member (fname,lname,email,password,address,telepon,id_province,id_city,id_day,id_month,id_year,id_gender)
		VALUES ('$fname', '$lname', '$email','$password','$address','$telepon','$id_province','$id_city','$id_day','$id_month','$id_year','$id_gender')";
		$q = $koneksi->query($sql);

		if($q === TRUE){
			echo "<script>document.location='../member/login'</script>";
		}
		else {
		  echo "<script>alert('Register failed!');history.go(-1)</script>";
		}

		$koneksi->close();
	}
}

?>
