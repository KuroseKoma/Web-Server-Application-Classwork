<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "classicmodels";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    mysqli_set_charset($conn,"utf8");
    if ($conn->connect_error) {
      die("Sorry, connection failed" . $conn->connect_error);
    }
?>