<?php
// establish connection to database
$db=mysqli_connect('localhost', 'Ankit', 'ankit', "my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>