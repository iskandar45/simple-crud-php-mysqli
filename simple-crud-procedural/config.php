<?php
   
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "mytest2"; 
   
   $con = mysqli_connect("$host","$user","$pass","$db");
   if ($con) {
   	//echo "terhubung ke mysql<br>";
   } else {
   	echo "Error : ". mysqli_connect_error();
   }
?>