<?php
  // connecting to the database
  include_once("../models/database.php");

  //session start
  session_start();

  //getting the data
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //getting user info from database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    //checking if user is valid or not
    if ($result == NULL) {
    header('location: ../views/login.php?error=invalid_user');
    echo "string1";
    }
    else{
      //checking if there is an void entry or not
      if(empty($email) || empty($password)){
        header('location: ../views/login.php?error=invalid_user');
        echo "string1";

      }
      else{
        while($row = mysqli_fetch_assoc($result) ){
          //getting data from the database
          $Demail     = $row['email'];
          $Dpassword = $row['password'];
          $Drole = $row['role'];
          //matching info
          if(($email == $Demail) && ($password == $Dpassword)){
            //selecting role
            if($Drole == 'guardian'){
              header('location: ../views/guardian.php');
            }
            else if($Drole == 'tutor'){
              header('location: ../views/tutor.php');
            }
            else{
              header('location: ../views/dashboard.php');
            }
          }
          else{
              header('location: ../views/login.php?error=invalid_user');
              echo "string1";

          }
        }
      }
    }
  }
?>
