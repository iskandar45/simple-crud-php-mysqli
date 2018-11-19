<?php
include 'config.php';

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$alamat = $_POST['alamat'];

$sql = "UPDATE data SET nama='$nama', jenkel='$jenkel', alamat='$alamat' WHERE id='$id'";

$query = mysqli_query($con, $sql);

if ($query) {
  //echo 'sukses';
  header('location:lihat_data.php?log=edit');
} else { 
  echo 'gagal update data';
}

?>