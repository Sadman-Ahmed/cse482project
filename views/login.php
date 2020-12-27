<!DOCTYPE html>
<?php
  // starting session
  session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
      <link rel="stylesheet" href="../assets/css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </head>
  <body>
<!-- navbar start -->
 <div class="menu">
    <ul>
	  <li><a href="#">Home</a></li>
	  <li><a href="#">About Us</a></li>
    <li><a href="#">Tutors</a></li>
	  <li><a href="map.html">Contact</a></li>
    <li class="menu-li"><a class="menu-btn" href="#">Sign Up</a></li>
	</ul>
 </div>
 <!-- navbar end -->

 <!-- notify about wrong login info -->
   <?php
   if (isset($_GET['error'])) {
     if($_GET['error'] == 'invalid_user'){
        echo "<h2 align='center'>Invalid username or Password</h2>";
      }
    }
  ?>

  <br>
  <h1 align="center" > Get Your Desired Tutors</h1><br>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla
dictum. <br>Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p> -->

<!-- login form -->
<div class="login-form">
         <div class="row">
             <div class="col-md-4 offset-md-4">
                 <form action="../models/verify.php" method="POST">
                     <div class="input-holder">
                       <i class="icon far fa-user"></i>
                       <input class="input" name="email" type="text" placeholder="Email">
                     </div>
                     <div class="input-holder">
                       <i class="icon fas fa-lock"></i>
                       <input class="input" name="password" type="password" placeholder="Password">
                     </div>
                     <div class="input-holder">
                       <a class="link" href="">Dont have account?</a>
                       <input class="button" name="submit" type="submit" value="Log In">
                     </div>
                 </form>
             </div>
         </div>
    </div>

  </body>
</html>
<?php
  // closing session
  session_destroy();
?>
