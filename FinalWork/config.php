<?php
    //linking the database 
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "s17160495";
    //connection
  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
  mysqli_set_charset($conn,"utf8");
  if ($conn->connect_error) {
    die("Sorry, Connection Failed. " . $conn->connect_error);
  }
?>