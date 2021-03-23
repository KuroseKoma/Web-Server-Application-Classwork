<?php  
require "config.php";
//2
$sql1= "SELECT * FROM customers";
//4
$sql2 = "SELECT * FROM customers WHERE country ='USA'";
//6
$sql3 = "SELECT customers.customerName, customers.city FROM customers WHERE country ='USA'";
//7
$sql4 = "SELECT customers.contactFirstName, customers.contactLastName, customers.phone,  FROM customers WHERE creditLimit > 50000";
//8
$sql5 = "SELECT customers.contactFirstName, customers.contactLastName, customers.phone,  FROM customers WHERE creditLimit BETWEEN 50000 AND 100000";
//9.1
$sql6 = "SELECT *  FROM customers WHERE city LIKE 'S%'";
//9.2 another way
$sql7 = "SELECT *  FROM customers WHERE LEFT (customers.city, 1) = 'S'";
//10
$sql8 = "SELECT *  FROM customers.city != 'NYC' AND creditLimit <= 1000000";
//11. Now try and create some of your own queries for the other tables included in the database
$sql8 = "SELECT *  FROM employees WHERE jobTitle LIKE '%Sale%'";
//12
$sql9 = "SELECT customers.customerName, customers.phone, customers.addressLinel, order.comments, order.orderDate FROM customers, orders WHERE customers.customerNumber = order.customerNumber";

?>