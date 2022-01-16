<?php
// $localhost = "localhost";
// $username = "root";
// $password = "";
// $database = "dadb";
 
// // Create connection and Check connection
// if(!$con = mysqli_connect($localhost, $username, $password) or die("Error in connection!"));
// mysqli_select_db($con, $database ) or die("Could not select database");

$localhost = "localhost";
$username = "root";
$password = "";
$database = "dadb";
 
// Create connection and Check connection
$con = mysqli_connect($localhost, $username, $password, $database);
?>
