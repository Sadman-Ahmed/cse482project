<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Choosing Tutors</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/favicon.ico">

  </head>
  <body>

    <!-- navbar start-->
    <div class="topnav">
      <a class="tutorhub" href="../views/index.php">Tutorhub.com</a>
      <a class="nav"href="../models/logout.php">Logout</a>
      <a class="nav"href="../views/postad.php">Post an Job</a>

    </div>

    <br><br><br>

      <!-- navbar end-->


      <h1 align = "center">Tution Details </h1>
      <?php
      include_once("../models/database.php");
      include_once("../models/error.php");
      session_start();
      $id = $_SESSION["id"];
      $sql = "SELECT * FROM post Where uid = '$id' and done = 0";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo '<table align = "center" class="job">';
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
          echo '</table>';

          $pid = $row['id'];
          $sql = "SELECT * FROM post ps, apply ap,users us where ps.id= '$pid' and ap.pid=ps.id and ap.uid=us.id;";
          $applicant = mysqli_query($conn, $sql);

          while($count = mysqli_fetch_assoc($applicant)){
            echo '<table align = "center" class="choose" >';
            echo '<thead >';
                echo '<tr >';
                    echo '<th >Tutor Name</th>';
                    echo '<th >Name Of The Institution</th>';
                    echo '<th >Address Details</th>';
                    echo '<th >Contact Number</th>';

                echo '</tr>';

            echo '</thead>';
            echo '<tbody >';
                echo '<tr >';
                   echo '<td >
                   '.$count['firstname'].'
                   '.$count['lastname'].'
                   </td>';
                   echo '<td >'.$count['university'].'</td>';
                   echo '<td >'.$count['address'].'</td>';
                   echo '<td >'.$count['contact'].'</td>';
                   echo '<td><button class = "btn contact" type= "submit" onclick=confirm('.$pid.','.$count['id'].')>Confirm</button></td>';

                echo '</tr>';

            echo '</tbody><br>';
          echo '</table>';
          }

        }

      }
      else {
        echo'<br><br><br>';
	      echo'<h1 align="center">You have not posted any jobs yet</h1>';
      }
     ?>
  </body>
  <script>
    function confirm(id,uid){
      window.location.href = "../models/confirm.php?id="+id+"&uid="+uid;
    }
  </script>
</html>
