<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
        <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>

    <!-- navbar start-->
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
   <!-- notify the user about successfull registration -->
   <div>
     <?php
       if (isset($_GET['success'])) {
         if($_GET['success'] == 'valid_user'){
            echo "<h2 align='center'>Registration successfull. Now you can LogIn</h2>";
          }
       }
      ?>
   </div>

    <h1 align="center" > Create Your Account</h1>

    <!-- registration form start -->
    <form action="../models/register.php" method="POST">
        <div class="input-holder">
          <input class="input" name="firstname" type="text" placeholder="First Name">
        </div>
        <div class="input-holder">
          <input class="input" type="text" name="lastname" placeholder="Last Name">
        </div>
        <div class="input-holder">
          <input class="input" type="text" name="username" placeholder="Username">
        </div>
        <div class="input-holder">
          <input class="input" name="email" type="email" placeholder="Email">
        </div>
        <div class="input-holder">
          <input class="input" name="password" type="password" placeholder="Password">
        </div>
        <div class="input-holder">
          <input class="input" name="conpassword" type="password" placeholder="Confirm Password">
        </div>
        <div class="input-holder">
          <select class="input" name="role">
            <option class="input-option" > Are You a Guardian or Tutor</option>
            <option class="input-option" value="guardian">Guardian</option>
            <option class="input-option" value="tutor">Tutor</option>
          </select>
        </div>
        <div class="input-holder">
          <input class="input" name="address" type="text" placeholder="Parmanent Address">
        </div>
        <div class="input-holder">
          <input class="input" name="contact"type="tel" placeholder="Conatact Number">
        </div>
        <div class="input-holder">
          <input class="input" name="dob" type="date" placeholder="Birth Day " value="" min="1900-01-01" max="2200-12-30">
        </div>
        <div class="input-holder"><input class="terms" type="checkbox" >I have read and agree to the Terms and Conditions and Privacy Policy  </div>
        <div class="input-holder"><input class="button" type="submit" value="Sign In"></div>
    </form>
    <!-- registration form end -->
  </body>
</html>
