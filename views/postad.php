<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guardian Login</title>
        <link rel="stylesheet" href="../assets/css/style.css">
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

    <h1 align="center" > Request For Tutor</h1>

    <!-- Input Group starts -->
    <form action="">
        <div align="center" class="input-holder">
        <input class="input" type="text" placeholder="Student Name">
        </div>
        <div align="center" class="input-holder">
        <input class="input" type="tel" placeholder="Student Age">
      </div><br>


        <div align="center" class="">
          <select class="input" id="dr1" onchange = "insertOptions('dr1','dr2')">
          <option class="input-option" name ="catagory" value="catagory"> Category</option>
          <option class="input-option" name="englishMedium" value="englishMedium" >English Medium</option>
          <option class="input-option" name="banglaMedium" value="banglaMedium" >Bangla Medium</option>
          <option class="input-option" name="englishVersion" value="englishVersion">English Version</option>
        </select>

        </div>

        <div align="center" class="input-holder">
          <select class="input"  id="dr2" onchange="insertSubjects('dr2','dr3')">
            <option name="class_no" value="class_no">Class</option>
          </select>
        </div>

      <div align="center" class="input-holder">
        <select id="dr3">
        <option class="input-option" name="subject" value="subject"  > Choose Subject</option>
      </select>
      </div>

        <div align="center" class="input-holder">
        <select >
          <option class="input-option" > Gender</option>
          <option class="input-option" >Male</option>
          <option class="input-option" >Female</option>
        </select>
      </div>

        <div align="center" class="input-holder">
        <input class="input" type="text" placeholder="Name Of Institution">
        </div>
        <div align="center" class="input-holder">
        <input class="input" type="tel" placeholder="Tutoring Time">
        </div><br>

        <div align="center" class="input-holder">
        <select >
        <option class="input-option" > Days/Week</option>
        <option  >1 days/week</option>
        <option  >2 days/week</option>
        <option  >3 days/week</option>
        <option  >4 days/week</option>
        <option  >5 days/week</option>
        <option  >6 days/week</option>
        <option  >7 days/week</option>
      </select>
    </div>

        <div align="center" class="input-holder">
        <input class="input" type="number" placeholder="Salary">
        </div>
        <div align="center" class="input-holder">
        <input class="input" type="text" placeholder="Adsress Details">
        </div>
        <div align="center" class="input-holder">
        <input class="button" type="submit" value="Post Your Request">
        </div>
        <br><br>

    </form>

    <!-- Input Group ends -->
    <script src="../assets/js/posted.js" charset="utf-8"></script>
  </body>
</html>
