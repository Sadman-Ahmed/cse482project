<!DOCTYPE html>
<?php
include_once("../models/error.php");
session_start();

if(!isset($_SESSION["id"])){
  header("Location: ../views/login.php");
}
if(($_SESSION["role"]=='guardian')){
  header("Location: ../views/login.php");
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Job Offers</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/favicon.ico">

    <script>
    function usersearchTxt(str){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById('searchTxt').innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET","../models/search.php?search="+str,true);
      xmlhttp.send();
    }
    </script>
  </head>
  <body>

    <!-- navbar start-->
    <div class="topnav">
      <a class="tutorhub" href="../views/index.php">Tutorhub.com</a>
      <a class="nav"href="../models/logout.php">Logout</a>
      <a class="nav"href="../views/applied.php">DashBoard</a>
    </div>


    <br><br><br>

      <!-- navbar end-->

      <table class="tables" align="right">
          <td class="td">

            <input id="searchBox" type="text" placeholder="Search Here" onkeyup="usersearchTxt(document.getElementById('searchBox').value);">
          </td>
        </tr>
      </table>
      <h1 align = "center">Offering Job </h1>

    <div id="searchTxt">
      <?php
      include '../models/search.php';
      echo fetch('');
      ?>
    </div>

      <!-- <p id="demo"></p> -->
      <!-- <button class="btn" id="btn" type="button">Apply Here</button> -->
      <script type="text/javascript">
      function clicked(itm) {
        console.log(this);
        let obj = document.getElementById('btns'+itm);
        if(obj.style.display!='none') obj.style.display = 'none';
        else obj.style.display = 'block';
        console.log(obj.style.display);
      }

      function apply(id){
        window.location.href = "../models/apply.php?id="+id;
      }
  </script>
  </body>
</html>
