<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<style>
table tr td input {	width : 99%;}
table tr td select {	width : 99%;}
table tr td textarea {	width : 99%;}
</style>

<body>
<h1>input data</h1>
<a href="lihat_data.php">Lihat Data</a>
	<form method="post" action="insert_data.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jenkel">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>