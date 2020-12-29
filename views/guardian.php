<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>guardian</h1>
    <?php
    $id = $_SESSION["id"];
    echo $id;
     ?>
     <br>
     <a href="../models/logout.php">logout</a>
  </body>
</html>
