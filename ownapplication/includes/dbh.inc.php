<?php
$dbServername="localhost";
$bdUsername="root";
$dbPassword="";
$dbname="loginsystem";
$conn=mysqli_connect($dbServername, $bdUsername, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
