
<html>
<head>
<title>Test Connection</title>
</head>


<body>
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
  
  $spl = "SELECT * FROM customers";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)){
          echo $row['customerNumber']."<br>";
      }
  }
?>

</body>
</html>