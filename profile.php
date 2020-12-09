<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d69cd8c0b2.js" crossorigin="anonymous"></script>
    <script defer src = "js/profile.js"></script>
</head>
<body>
<?php
include 'php/checklogin.php';
include 'php/dbconn.php';

if (isset($_SESSION['username'])) {
header("Location: profilepage.php");
}



?>
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
		<li><a href="theory.php"><i class="fas fa-book"></i>Music Theory</a></li>
            </ul> 
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="main_content">
            <div class="header">Sign Up</div>
        <body class = "body1"> 
            <div class="sign-up-form" >
              <h1>Sign Up Now</h1>
              <div id = "error"></div>
              <form id = "form" action = "php/signup.php" method ="post">

                <div class = "form-control">
                  <input type="email" class="input-box" placeholder="Your Email" name = "email">
			<script type = "text/javascript"> var list[][] = <?php echo json_encode($results); ?>; document.write("PEMOS"); </script>
                  <p class = "errorMessage" id = "errorEmail"></p>            
                  <input type= "text" id ="username" class="input-box" placeholder="Username" name = "username">
                  <p class = "errorMessage" id = "errorUsername"></p>     
                  <hr>
                  <input type="password" id= "password" class="input-box" placeholder="Your Password" name = "password">
                  <p class = "errorMessage" id = "errorPassword"></p>
                  <p class = "errorMessage" id = "errorPassword2"></p>
                  <p class = "errorMessage" id = "errorPassword3"></p>      
                  <input type="password" id= "password2" class="input-box" placeholder="Verify Password">
                  <p class = "errorMessage" id = "errorPasswordVerify"></p>   
                  <br>
                  <button type="submit" class="signup-btn">Sign up</button>
                  <hr>
                  <p class ="or">OR</p>
                  <p>Do you have an account? <a href="signIn.html">Sign in</a></p>
                </div>

              </form>
          </div>
        </body> 
        </div>
    </div>
</body>
</html>
