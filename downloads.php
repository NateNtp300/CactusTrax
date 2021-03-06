<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d69cd8c0b2.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">
        <div class="sidebar">
            <h2>CactusTrax</h2>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="drumkit.php"><i class="fas fa-address-card"></i>Drum Kit</a></li>
                <li><a href="reviews.php"><i class="fas fa-book-open"></i>Reviews</a></li>
                <li><a href="#"><i class="far fa-comments"></i> Chat</a></li>
                <li><a href="tutorials.php"><i class="fas fa-book"></i>Tutorials</a></li>
                <li><a href="downloads.php"><i class="fas fa-arrow-circle-down"></i>Downloads</a></li>
            </ul> 
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
<?php
include 'php/checklogin.php';

if (!isset($_SESSION['username'])) {
header("Location: profile.php");
}
?>
     <div class="main_content">
            <div class="header">Downloads</div>  
            <div class="info">
              <h2>Best Sample Packs</h2>
              
              <div>
                  
                <a href="https://splice.com/sounds/splice/sounds-of-kshmr-vol-1">Kshmr vol 1</a><br>
                <a href="https://splice.com/sounds/splice/sounds-of-kshmr-vol-2">Kshmr vol 2</a><br>
                <a href="https://cymatics.fm/collections/store">Cymatics packs</a><br>
                <a href="https://www.vengeance-sound.com/samples.php">Vengeance essential club sounds</a><br>
                  
              </div>

              <h2>Best Virtual Synthesizers</h2>
              <div> 
                <a href="https://www.lennardigital.com/store/">Sylenth1</a><br>
                <a href="https://www.native-instruments.com/en/products/komplete/synths/massive/">Massive</a><br>
                <a href="https://reveal-sound.com/">Spire</a><br>
              </div>
              

              <h2>Fl Studio</h2>
              <div>
                <a href="https://www.image-line.com/fl-studio/compare-editions/">Fl Studio producer edition</a>
              </div>
          </div>
        </div>
    </div>
</body>
</html>
