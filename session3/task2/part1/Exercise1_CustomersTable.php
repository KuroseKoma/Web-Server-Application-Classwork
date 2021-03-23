
<html>
<head>
<title>Customers Table</title>
</head>


<body>
<h3>Customers Table</h3>
<?php
  /*$servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "classicmodels";
  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
  mysqli_set_charset($conn,"utf8");
  if ($conn->connect_error) {
    die("Sorry, connection failed" . $conn->connect_error);
  }*/
  require "config.php";
  
  $sql = "SELECT * FROM customers";
  $result = mysqli_query($conn, $sql);
  echo "<table>";
  echo "<thead>
            <tr>
            <th>Surname</th>
            <th>City</th>
            <th>Country</th>
            </tr>
        </thead>";
  if (mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)){
          echo "<tr>
                    <td>".$row['contactLastName']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['country']."</td>
                </tr>";
      }
  }
  echo "</table>"
?>

</body>
</html>