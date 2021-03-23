
<html>
<head>
<title>Employee’s Table</title>
</head>


<body>
<h3>Employee’s Table</h3>
<?php
  require "config.php";
  
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