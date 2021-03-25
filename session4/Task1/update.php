<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      label{
        display: inline-block;
        text-align: right;
        width: 105px;
        height: 40px;
      }

    </style>
  </head>
  <body>
    <?php
    require "config.php";
    $sql = "SELECT * FROM `customers` WHERE customerID = ".$_GET['id'];
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <form action='update.php?id=<?php echo $_GET['id']; ?>' method='post'>
            <label>Name: </label><input type="text" name="name" value='<?php echo $row["cust_name"]; ?>' required/><br>
            <label>Address: </label><input type="text" name="addrress" maxlength="50" value='<?php echo $row["address_line1"]; ?>' required/><br>
            <label>Town: </label><input type="text" name="town" maxlength="50" value='<?php echo $row["town"]; ?>' required/><br>
            <label>Country: </label><input type="text" name="country" maxlength="50" value='<?php echo $row["country"]; ?>' required/><br>
            <label>Tel: </label><input type="number" name="tel" maxlength="15" value='<?php echo $row["Tel"]; ?>' required /><br>

          <input name='UPDATE' type='submit'/>
        </form>
    <?php
      }
    }
    if ($_SERVER["REQUEST_METHOD"] =="POST") {
      $sql_update = "UPDATE customers SET cust_name= '".$_POST['name']."',address_line1='".$_POST['addrress']."',town='".$_POST['town']."',country='".$_POST['country']."',Tel='".$_POST['tel']."' WHERE customerID =".$_GET['id'];

      if ($conn->query($sql_update)===TRUE) {
        echo "New record updated successfully<a href='index.php'>Back to Homepage</a>";
      }else {
        echo "Sorry, Update failed";
      }
    }
    $conn->close();
     ?>


  </body>
</html>
