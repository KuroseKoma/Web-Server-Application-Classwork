
<html>
<head>
<title>Test Connection</title>
</head>


<body>
<?php
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "s17160495";
  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
  mysqli_set_charset($conn,"utf8");
  if ($conn->connect_error) {
    die("Sorry, connection failed" . $conn->connect_error);
  }
?>

</body>
</html>