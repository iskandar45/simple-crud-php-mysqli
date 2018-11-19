<?php 

include 'config.php';

$id = $_GET['id'];

$q = "DELETE from data where id='$id'";
$query = mysqli_query($con, $q);

if ($query) {
 // echo "sukses delete";
 header('location:lihat_data.php?log=hapus');
} else {
//  echo 'gagal delete data';
}

?>