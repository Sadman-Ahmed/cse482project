<?php
function conectionEnd($value){
  mysqli_close($value);
}
function fetch($value=’’){
  include_once("../models/database.php");

$id = $_SESSION["id"];
  $sql = "SELECT * FROM post p where p.id not in (SELECT po.id FROM apply ap, post po WHERE ap.uid = '$id' AND ap.pid = po.id AND po.done = 0) and p.done=0 AND subject LIKE '%".$value."%'";

  $result = mysqli_query($conn, $sql);

  if($result) {
    $i = 0;
    while ($row = mysqlI_fetch_assoc($result)) {
      echo '<table align = "center" class="job" onclick="clicked('.$i.')" >';
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
              echo '<tr>';
                echo '<td>';;
                  echo '<button class="btn" onclick=apply('.$row['id'].') type="button" name="button" id="btns'.$i.'" style = "display:none;">Apply Here</button>';
                echo '</td>';
              echo '</tr>';
          echo '</tbody>';
      echo '</table><br><br>';
      $i++;
    }

  }
  else {
    echo "Error :".$sql."<br>".mysqli_error($conn);
  }
    conectionEnd($conn);
}
if (isset($_GET['search'])) {
    fetch($_GET['search']);
}
 ?>
