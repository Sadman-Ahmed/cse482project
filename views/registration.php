<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@1,600&display=swap" rel="stylesheet">
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
        <div align="center" class="input-holder">
          <input name="firstname" type="text" placeholder="First Name">
        </div>
        <div align="center" class="input-holder">
          <input type="text" name="lastname" placeholder="Last Name">
        </div>
        <div align="center" class="input-holder">
          <input type="text" name="username" placeholder="Username">
        </div>
        <div align="center" class="input-holder">
          <input name="email" type="email" placeholder="Email">
        </div>
        <div align="center" class="input-holder">
          <input name="password" type="password" placeholder="Password">
        </div>
        <div align="center" class="input-holder">
          <input name="conpassword" type="password" placeholder="Confirm Password">
        </div>
        <div align="center" class="input-holder">
          <select name="role">
            <option> Are You a Guardian or Tutor</option>
            <option value="guardian">Guardian</option>
            <option value="tutor">Tutor</option>
          </select>
        </div>
        <div align="center" class="input-holder">
          <input name="address" type="text" placeholder="Parmanent Address">
        </div>
        <div align="center" class="input-holder">
          <input name="contact"type="tel" placeholder="Conatact Number">
        </div>
        <div align="center"class="input-holder">
          <input name="dob" type="date" placeholder="Birth Day " value="" min="1900-01-01" max="2200-12-30">
        </div>
        <div align="center" class="input-holder">
          <input class="terms" type="checkbox" >I have read and agree to the Terms and Conditions and Privacy Policy
         </div>
        <div align="center" class="input-holder">
          <input class="button" type="submit" value="Sign Up">
        </div>
        <br><br>
    </form>
    <!-- registration form end -->
  </body>
</html>
