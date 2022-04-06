<?php
$mysqli = new mysqli("localhost","carpark","C@rpark123","carpark_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>