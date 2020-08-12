<?php
$dbconn = mysqli_connect("localhost","root","","guest");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
