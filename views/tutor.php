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
    <title></title>
  </head>
  <body>
    <h1>tutor</h1>
    <?php
    if(isset($_SESSION["id"])){
      $id = $_SESSION["id"];
      echo $id;
    }
     ?>
     <br>
     <a href="../models/logout.php">logout</a>
  </body>
</html>
