<?php
include "config.php";
  // get id from form display
  $id  = $_GET['id'];
  // set query delete
  $query = "delete from data where id = '".$conn->real_escape_string($id)."'";
  // execute the query
  if ( $conn->query($query) ) {
    // if success delete record
    header('location:index.php?msg=delete');
  } else {
    echo "Database Error : Unable to delete record. ";
  }


?>