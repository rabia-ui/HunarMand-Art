<?php
$link = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($link, "SELECT * FROM products 
ORDER BY RAND() ; 
");
?>
