
<html>
<head>
<title>Product Code</title>
</head>


<body>
<h3>Product Code</h3>
<?php
  require "config.php";
  
  $sql = "SELECT `productCode`, `productName`, `productLine`, `quantityInStock` FROM `products` WHERE 1 ORDER BY `products`.`productLine` , `products`.`productName`ASC";
  $result = mysqli_query($conn, $sql);
  echo "<table>
        <thead>
            <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Line</th>
            <th>Stock Quantity</th>
            </tr>
        </thead>";
        if (mysqli_num_rows($result) > 0) {
            echo '<table>
                    <tr><th>Product Code</th><th>Product Name</th><th>Product Line</th><th>Stock Quantity</th></tr>';
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr><td>'. $row['productCode'] .'</td><td>'.$row['productName'].'</td><td>'.$row['productLine'].'</td><td>'.$row['quantityInStock'].'</td></tr>';
            }
            echo '</table>';
          }
          mysqli_close($conn);
?>

</body>
</html>