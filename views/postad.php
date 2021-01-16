<!DOCTYPE html>
<?php
include_once("../models/error.php");
session_start();

if(!isset($_SESSION["id"])){
  header("Location: ../views/login.php");
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guardian Login</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="icon" href="../assets/img/favicon.ico">
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

      <div>
        <?php
          if (isset($_GET['success'])) {
            if($_GET['success'] == 'valid_post'){
               echo "<h2 align='center'>successfull</h2>";
             }
          }
         ?>
      </div>

    <h1 align="center" > Request For Tutor</h1>

    <!-- Input Group starts -->
    <form action="../models/postad.php" method="POST">
        <div align="center" class="input-left">
        <input  type="text" name="sname"placeholder="Student Name">
        </div>

        <div align="center" class="input-right">
        <input type="tel" name="sage" placeholder="Student Age">
      </div><br>

      <div class="input">
      <select name="sgender">
        <option> Gender</option>
        <option value="male" >Male</option>
        <option value="female" >Female</option>
      </select>
    </div>

    <div class="input">
    <input type="text" name="saddress" placeholder="Address Details">
    </div>

        <div class="input">
          <select  id="dr1" onchange = "insertOptions('dr1','dr2')" name="smedium">
          <option  name ="catagory" value="catagory"> Category</option>
          <option  name="englishMedium" value="englishMedium" >English Medium</option>
          <option  name="banglaMedium" value="banglaMedium" >Bangla Medium</option>
          <option  name="englishVersion" value="englishVersion">English Version</option>
        </select>

        </div>

        <div class="input-left">
          <select  id="dr2" onchange="insertSubjects('dr2','dr3')" name="sclass">
            <option name="class_no" value="class_no">Class</option>
          </select>
        </div>

      <div class="input-right">
        <select id="dr3" name="subject">
        <option name="subject" value="subject"  > Choose Subject</option>
      </select>
      </div>


        <div class="input">
        <input type="text" name="institution"placeholder="Name Of Institution">
        </div>
        <div class="input-left">
        <input  type="tel" name="time" placeholder="Tutoring Time">
        </div><br>

        <div class="input-right-days">
        <select name="days" >
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

        <div class="input">
        <input type="number"  name="salary" placeholder="Salary">
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
