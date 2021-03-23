<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customers</title>
    <style media="screen">
      table{
        border: 1px solid;
      }
    </style>
  </head>
  <body>
    <a href="form.php">Add New Record</a>
    <?php
    require "config.php";
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0) {
      echo "<table>
              <tr>
              <th>ID</th>
              <th>Mame</th>
              <th>Address</th>
              <th>Town</th>
              <th>County</th>
              <th>Tel</th>
              <th>Update</th>
              <th>Delete</th>
              </tr>";
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <form method='post' action='delete.php'><td><input value='".$row["customerID"]."' type='hidden' name='customerID'>".$row["customerID"]."</td>
                      <td>".$row["customerID"]."</td>
                      <td>".$row["cust_name"]."</td>
                      <td>".$row["address_line1"]."</td>
                      <td>".$row["town"]."</td>
                      <td>".$row["county"]."</td>
                      <td>".$row["Tel"]."</td>
 
                      <td><a href='update.php?id=".$row["customerID"]."'>Update</a></td>
                      <td><a href='delete.php?id=".$row["customerID"]."'>Delete</a></td></form></tr>";
              }
      echo "</table>";
    }
    $conn->close();
     ?>
  </body>
</html>
