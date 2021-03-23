
<html>
<head>
<title>Customer order</title>
</head>


<body>
<h3>Customer order</h3>
<?php
  require "config.php";
  
  $sql = "SELECT customers.contactFirstName, customers.contactLastName, orders.orderNumber, orders.orderDate FROM `orders`, `customers` WHERE orders.customerNumber = customers.customerNumber";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo '<table>
            <tr><th>First Name</th><th>Last Name</th><th>Order Number</th><th>Order Date</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr><td>'. $row['contactFirstName'] .'</td><td>'.$row['contactLastName'].'</td><td>'.$row['orderNumber'].'</td><td>'.$row['orderDate'].'</td></tr>';
    }
    echo '</table>';
  }
  mysqli_close($conn);

?>

</body>
</html>