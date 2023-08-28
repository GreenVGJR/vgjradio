<?php

include '../koneksi.php';

session_start();

if(!$_SESSION['username']) {
   header("location:login.php");
}
else {
   header("location:account.php");
}
?>