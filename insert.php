<?php

$mysqli = new mysqli('localhost', 'ghopse', 'aaAA@@44..!!', 'carpark_db');

if($mysqli->connect_error) { die('Error'.('.$mysqli->connect_errno.')'.$mysqli->connect_error');
}else{

    echo "Connected to database";
}

?>