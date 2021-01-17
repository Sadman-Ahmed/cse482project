<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guardian Login</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <script src="https://kit.fontawesome.com/e0abba498c.js" crossorigin="anonymous"></script>
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

      <!-- navbar end-->

    <h1 align="center" > Request For Tutor</h1>

    <!-- Input Group starts -->
    <form id="postForm">
        <div align="center" class="input-holder">
        <input  type="text" placeholder="Student Name" id="name">
        </div>

        <div align="center" class="input-holder">
        <input type="tel" placeholder="Student Age" id="age">

      </div><br>

      <div align="center" class=" input-holder">
      <select id="gender">
        <option > Gender</option>
        <option  >Male</option>
        <option  >Female</option>
      </select>

    </div>

    <div align="center" class=" input-holder">
    <input type="text" placeholder="Address Details" id="address">

    </div>

        <div align="center" class="input-holder">
          <select  id="dr1" onchange = "insertOptions()">
          <option  name ="catagory" value="catagory"> Category</option>
          <option  name="englishMedium" value="englishMedium" >English Medium</option>
          <option  name="banglaMedium" value="banglaMedium" >Bangla Medium</option>
          <option  name="englishVersion" value="englishVersion">English Version</option>
        </select>

        </div>

        <div align="center" class=" input-holder">
          <select  id="dr2" onchange="insertSubjects()">
            <option name="class_no" value="class_no">Class</option>
          </select>

        </div>

      <div align="center" class="input-holder">
        <select id="dr3">
        <option name="subject" value="subject"  > Choose Subject</option>
      </select>

      </div>


        <div align="center" class=" input-holder">
        <input type="text" placeholder="Name Of Institution" id="institutionName">

        </div>
        <div align="center" class=" input-holder">
        <input  type="tel" placeholder="Tutoring Time" id="tutoringTime">
        </div><br>

        <div align="center" class=" input-holder">
        <select id="week">
        <option > Days/Week</option>
        <option  >1 days/week</option>
        <option  >2 days/week</option>
        <option  >3 days/week</option>
        <option  >4 days/week</option>
        <option  >5 days/week</option>
        <option  >6 days/week</option>
        <option  >7 days/week</option>
      </select>

    </div>

        <div align="center" class=" input-holder">
        <input type="number" placeholder="Salary" id="salary">
        </div>


        <div align="center" class="input-holder">
        <input class="button" type="submit" value="Post Your Request">
        </div>
        <br><br>

    </form>

    <!-- Input Group ends -->
    <script src="../assets/js/posted.js" charset="utf-8"></script>
    <script src="../assets/js/postedValidation.js" charset="utf-8"></script>
  </body>
</html>
