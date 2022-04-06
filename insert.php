<?php
$mysqli = new mysqli("localhost","ghopse","aaAA@@44..!!","carpark_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>