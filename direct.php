<?php
include 'koneksi.php';

$usn = $_POST['username'];
$pass = $_POST['password'];

$checkdata = mysqli_query($konek, "SELECT * FROM user WHERE username = '$usn'");

   if(mysqli_num_rows($checkdata) == 1) {

      $data = mysqli_fetch_assoc($checkdata);

      if($data["password"] == $pass) {

      session_start();

      $_SESSION['name'] = $usn;
      $_SESSION['subs'] = $data["subscription"];
      header("location:awaiting.html");
      
      }
      else {
      header("location:check.php");
   }
}
   else {
      header("location:check.php");
   }
?>