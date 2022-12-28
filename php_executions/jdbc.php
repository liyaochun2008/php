<!-- connect to mysql by using address and password -->
<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$database = "clubs";
// create link
$conn = new mysqli($servername, $username, $password,$database);
// echo errors when connect failed
if ($conn->connect_error) {
    die("connect failed: " . $conn->connect_error);
} 
?>