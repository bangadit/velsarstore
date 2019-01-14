<?php

session_start();

unset($_SESSION['id_member']);
session_destroy();
header("location: ../member/login");

?>
