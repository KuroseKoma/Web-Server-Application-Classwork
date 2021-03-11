<!DOCTYPE html>

    <head><title>Exercise 1</title></head>
    <body>
    <?php
    echo "<h3>Calculation Exercise: </h3>";
    $x = 15;
    $y = 8;
     //Add
    echo $x."+".$y."=".($x + $y)."<br>";

    //reset value of "y" to 7
    $y = 7; 
    //Subtract
    echo $x."-".$y."=".($x - $y)."<br>";
    

    //Multiply
    echo $x."*".$y."=".($x * $y)."<br>";
    

    //Divide
    echo $x."/".$y."=".($x / $y)."<br>";
    

    echo $x."%".$y."=".($x % $y)."<br>";
    //Modulus(remainer of division)





    $variable = 8;
    echo "Value is now $variable </br>";
    //show the first value
    $variable = $variable +2;
    //Add 2
    echo "Value is now $variable </br>";
    $variable = $variable - 4;
    //Subtract 4
    echo "Value is now $variable </br>";
    $variable = $variable * 5;
    //Multiply by 5
    echo "Value is now $variable </br>";
    $variable = $variable / 3;
    //Divide by 3
    echo "Value is now $variable </br>";
    ++ $variable;
    //Increment value by one
    echo "Value is now $variable </br>";
    -- $variable;
    //Decrement value by 1
    echo "Value is now $variable </br>";

    echo "<h3>Exercise 5: </h3>";
    //array
    $a = array('Harry', 28, null);
    var_dump($a[0]);
    //show information of the variable (type & number)
    echo "</br> $a[0] </br>";
    var_dump($a[1]);
    echo "</br>";
    var_dump($a[2]);
    //or var_dump($a[4]);

    echo "<h3>Exercise 6: </h3>";
    $around = "around";
    //Double-quoted:
    echo "What goes $around comes $around";
    echo "</br>";
    //Single-quoted:
    echo 'What goes ' .$around. ' comes ' .$around;

    echo "<h3>Exercise 7: </h3>";
    //set an array
    $whatsit = array('', 0.1, true, 12, null,);
    //string
    echo "Value is ". gettype($whatsit[0]). "</br>";
    //double
    echo "Value is ". gettype($whatsit[1]). "</br>";
    //boolean
    echo "Value is ". gettype($whatsit[2]). "</br>";
    //integer
    echo "Value is ". gettype($whatsit[3]). "</br>";
    //null
    echo "Value is ". gettype($whatsit[4]). "</br>";
    
    ?>
    <body>

</html>


 


