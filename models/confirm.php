<?php
include_once("../models/database.php");

session_start();

$id = $_GET['id'];
$uid = $_GET['uid'];

echo $id;
echo $uid;

$sql = "UPDATE post set done = 1 , tid = '$uid' WHERE id ='$id'";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  //redirecting to the registration page
header("Location: ../views/choosingtutor.php");


 ?>
