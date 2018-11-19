<?php
// set connection variable
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mytest2";
// connnect to mysql server
$conn = new mysqli($host, $user, $pass, $db);
// check connection error
if(mysqli_connect_errno()) {
  echo "Error : Could not connect to database.";
  exit;
}
?>