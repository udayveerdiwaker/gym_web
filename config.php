<?php
// config.php - Database Configuration
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'dynamic_website';
$conn = mysqli_connect($host, $user, $pass, $dbname);
// if ($conn->connect_error) die('Connection Failed: ' . $conn->connect_error);
if($conn){
    // echo "done";
}else{
    echo "not done";
}
