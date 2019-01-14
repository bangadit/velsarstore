<?php

include "../conf/koneksi.php";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact (name,email,subject,message)
VALUES ('$name', '$email', '$subject', '$message')";
$q = $koneksi->query($sql);

if($q === TRUE){
	echo "<script>alert('Your message has been sent');document.location='../contact'</script>";
}
else {
	echo "<script>alert('Sorry, your message not sent');document.location='../contact'</script>";
}

$koneksi->close();

?>
