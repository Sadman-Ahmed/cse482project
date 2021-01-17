<?php
    // connecting to the database
  include_once("../models/database.php");
  include_once("../models/error.php");


    //getting the data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $role = $_POST['role'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $dob = $_POST['dob'];
  $university = isset($_POST['university'])? $_POST['university']:"";

    //sending the data to the database through sql query
  $sql = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`, `role`, `address`, `contact`, `dob`,`university`)
    VALUES ('$firstname','$lastname','$username','$email','$password','$role','$address','$contact','$dob','$university')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    //redirecting to the registration page
  header("Location: ../views/registration.php?success=valid_user");

 ?>
