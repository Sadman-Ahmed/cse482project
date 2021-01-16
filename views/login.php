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
      <link rel="icon" href="../assets/img/favicon.ico">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </head>
  <body>
    <!-- navbar start-->
    <div class="topnav">
      <a class="tutorhub" href="#">Tutorhub.com</a>
      <a class="nav"href="#news">News</a>
      <a class="nav"href="#contact">Contact</a>
      <a class="nav"href="#about">About</a>
      <a class="nav"href="#home">Home</a>
    </div>

    <br><br><br>

 <!-- notify about wrong login info -->
   <?php
   if (isset($_GET['error'])) {
     if($_GET['error'] == 'invalid_user'){
        echo "<h2 align='center'>Invalid username or Password</h2>";
      }
    }
  ?>

  <br>
  <h1 align="center" > Get Your Desired Tutors</h1>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla
dictum. <br>Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p> -->

<!-- login form -->
<div class="login-form">
         <div class="row">
             <div class="col-md-4 offset-md-4">
                 <form action="../models/verify.php" method="POST">
                     <div align="center"  class="input-holder">
                       <i class="icon far fa-user"></i>
                       <input name="email" type="email" placeholder="Email">
                     </div>
                     <div align="center" class="input-holder">
                       <i class="icon fas fa-lock"></i>
                       <input name="password" type="password" placeholder="Password">
                     </div>
                     <div  class="input-holder">
                       <a class="link" href="">Dont have account?</a>
                       <input class="login-button" name="submit" type="submit" value="Log In">
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
