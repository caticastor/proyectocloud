<?php

    $dbhost = "20.185.216.150";
    $dbuser = "usercloud1";
    $dbpass = "usercloud1";
    $db = "info";
   
   // Create connection
   $con = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
