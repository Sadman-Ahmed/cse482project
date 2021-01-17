<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="icon" href="../assets/img/favicon.ico">
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

    <div align= "center" class="tab">
    <button class="tablinks" onclick="openCity(event, 'Guardian')">Guardian</button>
    <button class="tablinks" onclick="openCity(event, 'Tutor')">Tutor</button>
    </div>

    <div id="Guardian" class="tabcontent">
      <form id="form" action="../models/register.php" method="POST">
        <input type="hidden" name="role" value="guardian">
        <div align="center" class="input-holder">
          <input name="firstname" type="text" placeholder="First Name" id="fname">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input type="text" name="lastname" placeholder="Last Name" id="lname">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input type="text" name="username" placeholder="Username" id="username">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="email" type="email" placeholder="Email" id="email">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="password" type="password" placeholder="Password" id="password">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="conpassword" type="password" placeholder="Confirm Password" id="password2">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="address" type="text" placeholder="Parmanent Address" id="address">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="contact"type="tel" placeholder="Conatact Number" id="contactNo">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center"class="input-holder">
          <input name="dob" type="date" placeholder="Birth Day " value="" min="1900-01-01" max="2200-12-30" id="date">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input id="terms" class="terms" type="checkbox" >I have read and agree to the Terms and Conditions and Privacy Policy
          <br>
          <small>Error message</small>
         </div>

        <div align="center" class="input-holder">
          <input class="button" type="submit" value="Sign Up" >
        </div>
          <br><br>
      </form>
    </div>



    <div id="Tutor" class="tabcontent">
      <form id="form2" action="../models/register.php" method="POST">
        <input type="hidden" name="role" value="tutor">
        <div align="center" class="input-holder">
          <input name="firstname" type="text" placeholder="First Name" id="fname2">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input type="text" name="lastname" placeholder="Last Name" id="lname2">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input type="text" name="username" placeholder="Username" id="username2">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="email" type="email" placeholder="Email" id="email2">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="password" type="password" placeholder="Password" id="password12">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="conpassword" type="password" placeholder="Confirm Password" id="password22">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="" type="text" placeholder="Name of Your Institution" id="institutionName">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="address" type="text" placeholder="Parmanent Address" id="address2">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input name="contact"type="tel" placeholder="Conatact Number" id="contactNo2">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center"class="input-holder">
          <input name="dob" type="date" placeholder="Birth Day " value="" min="1900-01-01" max="2200-12-30" id="date2">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div align="center" class="input-holder">
          <input id="terms2" class="terms" type="checkbox" >I have read and agree to the Terms and Conditions and Privacy Policy
          <br>
          <small>Error message</small>
         </div>

        <div align="center" class="input-holder">
          <input class="button" type="submit" value="Sign Up">
        </div>
          <br><br>
      </form>
    </div>
    <!-- registration form end -->
  </body>


<script src="../assets/js/registration.js" charset="utf-8"></script>


</html>
