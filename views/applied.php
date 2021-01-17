<?php
session_start();

if(!isset($_SESSION["id"])){
  header("Location: ../views/login.php");
}
if(($_SESSION["role"]=='guardian')){
  header("Location: ../views/login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="icon" href="../assets/img/favicon.ico">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@1,600&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- navbar start-->
    <div class="topnav">
      <a class="tutorhub" href="../views/index.php">Tutorhub.com</a>
      <a class="nav"href="../models/logout.php">Logout</a>
      <a class="nav"href="../views/joboffer.php">Look For a Job</a>
    </div>


    <h1 align="center">Applied Jobs</h1>

    <?php
    include_once("../models/database.php");
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM apply ap, post po WHERE ap.uid = '$id' AND ap.pid = po.id AND po.done = 0;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo '<table align = "center" class="job"" >';
        echo '<thead >';
            echo '<tr >';
                echo '<th >Student Name</th>';
                echo '<th >Student Age</th>';
                echo '<th >Gender</th>';
                echo '<th >Address Details</th>';
                echo '<th >Category</th>';
                echo '<th >Class</th>';
          echo '</tr>';

        echo '</thead>';
        echo '<tbody >';
            echo '<tr >';
               echo '<td >'.$row['sname'].'</td>';
               echo '<td >'.$row['sage'].'</td>';
               echo '<td >'.$row['gender'].'</td>';
               echo '<td >'.$row['address'].'</td>';
               echo '<td >'.$row['medium'].'</td>';
               echo '<td class="job-class">'.$row['class'].'</td>';
          echo '</tr>' ;
      echo '</tbody><br>' ;

        echo '<thead>';
            echo '<tr >';
                echo '<th>Subject</th>';
              echo '<th >Name Of The Institution</th>' ;
                echo '<th >Tutoring Time</th>';
              echo '<th >Days/Week</th>' ;
              echo '<th >Salary</th>' ;
          echo '</tr>';
            echo '</thead>' ;

          echo '<tbody >' ;
                echo '<tr >';
                   echo '<td >'.$row['subject'].'</td>';
                   echo '<td >'.$row['institution'].'</td>';
                   echo '<td >'.$row['time'].'</td>';
                   echo '<td >'.$row['days'].'</td>';
                   echo '<td >'.$row['salary'].'</td>';
                echo '</tr>';
            echo '</tbody>';
        echo '</table><br><br>';
      }
    }
     ?>
    <br><br><br>

  </body>
</html>
