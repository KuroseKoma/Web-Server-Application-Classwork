<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
  </head>
  <body>
    <?php
    require "config.php";
    
    $id = $_GET['id'];
    $sql = ("DELETE FROM customers WHERE customerID=$id");
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully<a href='index.php'>Back to Homepage</a>";
    }else {
      echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
     ?>
  </body>
</html>
