<?php

   include 'koneksi.php';

   //ngambil data dari register
   $usn = strtolower(stripslashes($_POST['username']));
   $pass = mysqli_real_escape_string($konek, $_POST['password']);


   //cek data kalo ada di database
   $checkdata = mysqli_query($konek, "SELECT * FROM user WHERE username = '$usn'");

   //if statement
   if(mysqli_fetch_assoc($checkdata)) {
      header("location:error.register.php");
      return false;
   }
   else {
      mysqli_query($konek, "INSERT INTO user VALUES('', '$usn', '$pass', 'user', 'false')");
   }

   if(mysqli_affected_rows($konek) > 0) {
      header("location:login.php");
   }
   else {
      header("location:register.php");
   }
?>