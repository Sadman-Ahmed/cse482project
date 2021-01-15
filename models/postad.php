<?php
session_start();
include_once("../models/database.php");
include_once("../models/error.php");

$id = $_SESSION["id"];
$name = $_POST['sname'];
$age = $_POST['sage'];
$gender = $_POST['sgender'];
$address = $_POST['saddress'];
$medium = $_POST['smedium'];
$class = $_POST['sclass'];
$subject = $_POST['subject'];
$institute = $_POST['institution'];
$time = $_POST['time'];
$days = $_POST['days'];
$salary = $_POST['salary'];


$sql = "INSERT INTO `post`(`uid`, `sname`, `sage`, `gender`, `address`, `medium`, `class`, `subject`, `institution`,`time`,`days`,`salary`)
  VALUES ('$id','$name','$age','$gender','$address','$medium','$class','$subject','$institute','$time','$days','$salary')";


  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    //redirecting to the registration page
  header("Location: ../views/postad.php?success=valid_post");


 ?>
