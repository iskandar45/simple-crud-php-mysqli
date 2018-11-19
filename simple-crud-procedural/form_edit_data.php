<!DOCTYPE html>
<html>
<head>
	<title>tes</title>
</head>
<body>
<h1>input data</h1>
<a href="lihat_data.php">Lihat Data</a>

<?php
	include 'config.php';
	$id = $_GET['id'];
	$data = mysqli_query($con,"select * from data where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

	<form method="post" action="update_data.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
			</tr>
			<tr>
				<td>jenkel</td>
				<td>:</td>
				<td>
					<select name="jenkel">
						<option value="<?php echo $d['jenkel']; ?>"><?php echo $d['jenkel']; ?></option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat"><?php echo $d['alamat']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="submit" value="Update" onclick="confirm('Apakah data yang anda masukan sudah benar ?')">
				</td>
			</tr>
		</table>
	</form>
	<?php }; ?>
</body>
</html>