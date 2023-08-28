<?php
include 'koneksi.php';

session_start();

if(empty($_SESSION['name'])) {
   $_SESSION['username'] = "";
   $_SESSION['subscription'] = "";
}
else {
   $_SESSION['username'] = $_SESSION['name'];
   $_SESSION['subscription'] = $_SESSION['subs'];
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>We're Listening</title>
      <link rel="stylesheet" href="hamster.css"/>
   </head>
   <body>
      <header>
         <img src="image/headermain.png" alt="Header"/><br><br>
      </header>
      <div class="header">
         <b>VGJR Radio</b>
      <h5>Listen's Streaming Radio</h5>
      </div>
      <br>
      <div class="secback" align="center">
            <div id="inp">
               <div class="button">
               <button onClick="window.location.href='check.php';" role="button" class="button"><a href="check.php" id="usernm">
                  <?php if($_SESSION['username'] === "") {
                     echo "Account";
                  }
                  else {
                     echo $_SESSION['username'];
                  }
                     ?>
               </a>
               </button>
               </div>
               <div class="section1">
               <br>
               <img src="image/medanfm.webp" alt="Logo" loading="lazy"/>
               <h3>MEDAN FM - <a href="https://live.medanfm.id">96.3 FM</a>
                  <br>Medan, Jawa Barat</h3>
               </div>
            <div class="audioplayer" onclick="medanfm">
               <audio controls preload="none">
                  <source src="https://live.medanfm.id/medanfm.ogg" type="application/ogg"/>
               </audio>
               </div>
               <div class="section2">
               <br>
               <img src="image/z999.png" alt="Logo" loading="lazy"/>
               <h3>Z 99.9 - <a href="https://z999fm.com/">99.9 FM</a>
                  <br>Jakarta, Jawa Barat</h3>
               </div>
               <?php
               if(!empty($_SESSION['subscription'])) {
                  if($_SESSION['subscription'] == "true") {
                  echo "<div class=\"audioplayer\"> <audio controls preload=\"none\"> <source src=\"https://svara-stream.radioddns.net:8443/jakarta_z999fm_aac\" type=\"audio/mpeg\" /> </audio> </div>";
                  }
                  else {
                     echo "<h3 style=\"color: yellow;\">Exclusive for <i><a href=\"check.php\">Premium</a></i> Only.</h3>";
                  }
                  
               }
               else {
                  echo "<h3 style=\"color: yellow;\">Exclusive for <i><a href=\"check.php\">Premium</a></i> Only.</h3>";
               }
               ?>
               <div class="section2">
               <br>
               <img src="image/ozradio.png" alt="Logo" loading="lazy"/>
               <h3>OZ RADIO - <a href="https://ozradiojakarta.com/">90.8 FM</a>
                  <br>Jakarta, Jawa Barat</h3>
               </div>
               <?php
               if(!empty($_SESSION['subscription'])) {
                  if($_SESSION['subscription'] == "true") {
                  echo "<div class=\"audioplayer\"> <audio controls preload=\"none\"> <source src=\"https://streaming.ozradiojakarta.com:8443/ozjakarta\" type=\"audio/mpeg\" /> </audio> </div>";
                  }
                  else {
                     echo "<h3 style=\"color: yellow;\">Exclusive for <i><a href=\"check.php\">Premium</a></i> Only.</h3>";
                  }
               }
               else {
                  echo "<h3 style=\"color: yellow;\">Exclusive for <i><a href=\"check.php\">Premium</a></i> Only.</h3>";
                  }
               ?>
               <div class="section2">
               <br>
               <img src="image/rrij.jpg" alt="Logo" loading="lazy"/>
               <h3>RRI 2 - <a href="https://rri.co.id/">105.0 FM</a>
                  <br>Jakarta, Jawa Barat</h3>
               </div>
               <div class="audioplayer">
                  <audio controls preload="none">
                     <source src="https://stream-node1.rri.co.id/streaming/25/9025/rrijakartapro2.mp3" type="audio/mpeg" />
                  </audio>
               </div>
               <div class="section2">
               <br>
               <img src="image/utaindo.webp" alt="Logo" loading="lazy"/>
               <h3>UTAINDORADIO - <a href="https://utaindoradio.com">Digital</a>
                  <br>Bandung, Jawa Barat</h3>
               </div>
               <?php
               if(!empty($_SESSION['subscription'])) {
                  if($_SESSION['subscription'] == "true") {
                  echo "<div class=\"audioplayer\"> <audio controls preload=\"none\"> <source src=\"https://sukmben.radiogentara.com/listen/utaindo_radio/utaindo-aac\" type=\"audio/mpeg\" /> </audio> </div>";
               }
               else {
                  echo "<h3 style=\"color: yellow;\">Exclusive for <i><a href=\"check.php\">Premium</a></i> Only.</h3>";
                  }
               }
               else {
                  echo "<h3 style=\"color: yellow;\">Exclusive for <i><a href=\"check.php\">Premium</a></i> Only.</h3>";
                  }
               ?>
      </div>
   </div>
   </body>
</html>