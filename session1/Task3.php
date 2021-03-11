<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task 3</title>
    <style media="screen">
      table{
        border: 1px solid #000000;
        border-spacing: 0;
      }
      td{
        height: 50px;
        width: 50px;
      }

      .black{
        background-color: #000000;
      }
      .white{
        background-color: #FFFFFF;
      }
    </style>
  </head>
  <body>
    <h1>Test 1</h1>
    <?php
    $total = 0;
    $time = 30;
    for ($i=0; $i <= $time ; $i++) {
      $total = $total + $i;
      echo $i;
      if ($i < $time){
          echo "+";
      }
      else{
          echo "=".$total. "</br>";      }
    }
    echo "Total: ".$total;


    echo "<h1>Test 2</h1>";

    for ($i=1; $i < 6; $i++) {
      //there are 5 rows of "*"asterisks
      for ($star = 1; $star <= $i; $star++) {
        echo "*";
        //Echo asterisk when the asterisk is less than the number of rows until it is equal to the number of rows
      }
      echo "<br />";
    }
    
    echo "<h1>Test 3</h1>";
    $x = 1;
    $num = 4;
    //$num is the number of products, which can be change;
    for ($i=1; $i < $num; $i++) {
      $x *= ($i+1);
      //$x = $x*($i+1);
    }
    echo "The factorial of $num is $x";
    
    echo "<h1>Test 4</h1><table width='400px'>";
    for ($i=1; $i <= 8 ; $i++) {
      echo "<tr>";
      $row = $i%2;
      //echo "$row ";
      //Divide the styles of each row into two categories, the singular row is $color1 and the double row is $color2
      if ($row == 1) {
        for ($color1=1; $color1 <= 8; $color1++) {
          $colA = $color1 % 2;
          if ($colA == 1) {
            echo "<td class='black'></td>";
          }
          else {
            echo "<td class='white'></td>";
          }
        }
      }
      elseif ($row == 0) {
        for ($color2=1; $color2 <= 8; $color2++) {
          $colB = $color2 % 2;
          if ($colB == 1) {
            echo "<td class='white'></td>";
          }
          else {
            echo "<td class='black'></td>";
          }
        }
      }
      echo "</tr>";
    }
    echo "</table>";
    ?>

  </body>
</html>
