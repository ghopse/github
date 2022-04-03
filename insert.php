<?php
$host = 'localhost';
$dbUsername = 'carpark';
$dbPassword = 'C@rpark123';
$dbName = 'carpark_db';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error) { die('Error'.('.$mysqli->connect_errno.')'.$conn->connect_error');
}else{

    echo "Connected to database";
}

?>