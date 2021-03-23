<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require "config.php";


    $post_data = $_POST["name"]."','".$_POST["addrress"]."','".$_POST["town"]."','".$_POST["country"]."','".$_POST["tel"];
    $sql = "INSERT INTO `customers`(`title`,`categories`,`developer`,`publisher`,`releaseDate`,`about`,`bio`,`platform`,`requirement`,`language`,`purchaseLink`) VALUES('$post_data1','$post_data2')";

    if ($connection->query($sql) === TRUE) {
      echo "New record created successfully";
    }else {
      echo "Error: ". $sql ."<br>". $conn->error;
    }

    $conn->close();
     ?>
     <a href="index.php">Check Records</a>
  </body>
</html>
