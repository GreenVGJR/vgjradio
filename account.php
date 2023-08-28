<?php

include 'koneksi.php';

session_start();

if(!$_SESSION['username']) {
   header("location:login.php");
}

if(!empty($_GET['get-feature'])) {
   if(!empty($_GET['session'])) {
      if($_GET['session'] == session_id() && $_GET['get-feature'] == "true") {
      $name = $_SESSION['username'];

      $checkdata = mysqli_query($konek, "SELECT * FROM user WHERE username = '$name'");
      $data = mysqli_fetch_assoc($checkdata);

      $id = $data["id"];

      mysqli_query($konek, "UPDATE user SET subscription = 'true' WHERE id = '$id'");
      $_SESSION['subscription'] = 'true';
      $_SESSION['subs'] = 'true';
      header("location:check.php");
      }
      else if($_GET['session'] == session_id() && $_GET['get-feature'] == "false") {
         $name = $_SESSION['username'];
   
         $checkdata = mysqli_query($konek, "SELECT * FROM user WHERE username = '$name'");
         $data = mysqli_fetch_assoc($checkdata);
   
         $id = $data["id"];
   
         mysqli_query($konek, "UPDATE user SET subscription = 'false' WHERE id = '$id'");
         $_SESSION['subscription'] = 'false';
         $_SESSION['subs'] = 'false';
         header("location:check.php");
      }
   }
};

if(!empty($_GET['logout'])) {
   session_destroy();
   header("location:login.php");
   return false;
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Account</title>
   <link rel="stylesheet" href="seconds.css"/>
</head>
<body>
   <div id="thisprofileright">
      <div class="header1">
      <h2>ACCOUNT</h2>
      <h3><?php echo $_SESSION['username']?></h3>
      <p><a href="account.php?logout=1">LOG OUT</a> | <a href="index.php">BACK</a> | <a href="account.php">REFRESH</a>
</div>
</div>
<div id="thisprofileleft">
      <div class="header2">
      <h2>INFO</h2>
      <div class="textheader2">
      <h3><?php
         if($_SESSION['subscription'] == "true") {
            echo "You own Premium perks.<br>You can <a href=\"account.php?get-feature=false&session=" . session_id() . "\">disable</a> this.";
         }
         else {
            echo "You don't have Premium perks.<br><a href=\"account.php?get-feature=true&session=" . session_id() . "\">Get</a> one here.";
         }
          ?>
      </h3>
</div>
</div>
</div>
</body>
</html>