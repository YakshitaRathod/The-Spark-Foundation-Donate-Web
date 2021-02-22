<?php
 
$conn = mysqli_connect("localhost","root","","form1");
 
if (!$conn) {​​​​
    die("Connection failed: " . mysqli_connect_error());
}​​​​;
$errors=array();
?> 
