<?php
include_once("../models/database.php");

session_start();

$id = $_GET['id'];

echo'<br>';
$uid = $_SESSION["id"];

$sql = "INSERT INTO `apply`(`pid`, `uid`)
  VALUES ('$id','$uid')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    //redirecting to the registration page
  header("Location: ../views/joboffer.php");

 ?>
