
<html>
<head>
<title>Employee’s Table</title>
</head>


<body>
<h3>Employee’s Table</h3>
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
  
  $sql = "SELECT * FROM employees ORDER BY `lastName` ASC";
  $result = mysqli_query($conn, $sql);
  echo "<table>";
  echo "<thead>
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Job Title</th>
            </tr>
        </thead>";
  if (mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)){
          echo "<tr>
                    <td>".$row['firstName']."</td>
                    <td>".$row['lastName']."</td>
                    <td>".$row['jobTitle']."</td>
                </tr>";
      }
  }
  echo "</table>"
?>

</body>
</html>