<?php  
require "config.php";
$sql1= "SELECT * FROM customers";
$sql2 = "SELECT * FROM customers WHERE country ='USA'";
$sql3 = "SELECT `customerName`, `city` FROM customers WHERE country ='USA'";
$sql4 = "SELECT `contactFirstName`,`contactLastName`, `phone`,  FROM customers WHERE creditLimit > 50000";

?>