<?php
  $hostname = "sql303.epizy.com";
  $username = "epiz_33253630";
  $password = "LodfHdeCj6vAGn";
  $dbname = "epiz_33253630_cannect";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
