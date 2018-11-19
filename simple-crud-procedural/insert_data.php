<?php 
include "config.php";
//deskripsi variable
$id 	= uniqid();
$nama 		= $_POST['nama'];
$jenkel 		= $_POST['jenkel'];
$alamat 		= $_POST['alamat'];

//query database
$sql = "insert into data(id, nama, jenkel, alamat)values('$id','$nama','$jenkel','$alamat')";

$hasil = mysqli_query($con, $sql);

//cek berhasil tidak 
if ($hasil) {
	header('location:lihat_data.php?log=sukses');
} else {
	echo "gagal input data";
 }
?>