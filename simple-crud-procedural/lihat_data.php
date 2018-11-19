<!DOCTYPE html>
<html>
<head>
	<title>lihat data</title>
</head>
<body>
<?php 
if(isset($_GET['log'])) {
	if ($_GET['log'] == "hapus") {
		echo "Berhasil Hapus Data. <br>";
	} else if ($_GET['log'] == "edit") {
		echo "Berhasil Edit Data. <br>";
	} else if ($_GET['log'] == "sukses") {
		echo "Berhasil Input Data. <br>";
	}
}

?>

<a href="input_data.php">Input Data</a>
 <table border="1" width="80%" style="border-collapse : collapse;">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>ID</th>
 			<th>Nama</th>
 			<th>Jenkel</th>
 			<th>Alamat</th>
 			<th>Aksi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		  include 'config.php';
 		  $query = mysqli_query($con, "SELECT * from data");
 		  $no = 1;
 		  foreach ($query as $row) {
		 	echo "<tr>
		 			<td>$no</td>
		 			<td>".$row['id']."</td>
		 			<td>".$row['nama']."</td>
		 			<td>".$row['jenkel']."</td>
		 			<td>".$row['alamat']."</td>
		 			<td>
						<a href='form_edit_data.php?id=$row[id]'>Edit</a> || 
          	<a href='hapus_data.php?id=$row[id]' onclick=\"confirm('Apakah anda yakin ingin menghapusnya ?')\">Hapus</a>
					</td>
		 		  </tr>";
		 	$no++;
		 }
 		?>
 	</tbody>
 </table>
</body>
</html>