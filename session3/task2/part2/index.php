<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title> Book Store</title>
    <style>
        body{
            padding: 20px 5%;
        }
        
    </style>

</head>
<body>
    <?php 
    require 'config.php';
    $sql = "SELECT * FROM books";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0) {
      echo "<table border='1'>
              <tr>
                <th>id</th>
                <th>cover</th>
                <th>Title</th>
                <th>Author</th>
                <th>Format</th>
                <th>Price</th>
                <th>Publisher</th>
                <th>Intro</th>
                <th>Purchase Link</th>

            </tr>";
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><form method='post' action='delete.php'><td><input value='".$row["id"]."' type='hidden' name='gameID'>".$row["id"]."</td>
                      <td><img src='image/".$row["id"].".jpg'></td>
                      <td>".$row["book"]."</td>
                      <td>".$row["author"]."</td>
                      <td>".$row["format"]."</td>
                      <td>".$row["price"]."</td>
                      <td>".$row["publisher"]."</td>
                      <td>".$row["detail"]."</td>
                      <td><a href='".$row["purchaseLink"]."'>".$row["purchaseLink"]."</a></td>
                      </form></tr>";
              }
      echo "</table>";
    }
      $conn->close();
    ?>
    
</body>

</html>