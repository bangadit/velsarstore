<?php

include "../conf/koneksi.php";

$nomor = $_POST['nomor'];
$rekening = $_POST['rekening'];
$bank = $_POST['bank'];
$total = $_POST['total'];
$waktu = date('dd-mm-YYYY', $waktu);

$sql = "INSERT INTO confirm (nomor,rekening,bank,total,waktu)
VALUES ('$nomor', '$rekening', '$bank', '$total',CURRENT_TIME())";
$q = $koneksi->query($sql);

if($q === TRUE){
	echo "<script>alert('Your confirm has been sent');document.location='../member/confirm'</script>";
}
else {
	echo "<script>alert('Sorry, your confirm not sent');history.go(-1)</script>";
}

$koneksi->close();

?>
