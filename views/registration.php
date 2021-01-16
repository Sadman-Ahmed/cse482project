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
      <form action="../models/register.php" method="POST">
        <input type="hidden" name="role" value="guardian">
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
    </div>

    <div id="Tutor" class="tabcontent">
      <form action="../models/register.php" method="POST">
        <input type="hidden" name="role" value="tutor">
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
            <input name="" type="text" name ="university"placeholder="Name of Your Institution">
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
    </div>
    <!-- registration form end -->
  </body>

  <script>
function openCity(evt, role) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(role).style.display = "block";
  evt.currentTarget.className += " active";
}
tabcontent = document.getElementsByClassName("tabcontent");
tabcontent[0].style.display = "none";
</script>

</html>
