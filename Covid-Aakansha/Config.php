<?php
$username="root";
$password="";
$server="localhost";
$database="covid";

$conn=mysqli_connect($server,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>