<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Record</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h2>Edit Data</h2>
  <a href="index.php"><- LIHAT DATA</a>
  <?php 
  // if there's any user action
  $action = isset($_POST['action']) ? $_POST['action'] : "";
  if($action == 'update') { // when user submitted the form
    // connect to database
    include 'config.php';
    // desc variable
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenkel'];
    $alamat = $_POST['alamat'];
    // write update query
    // $conn->real_escape_string() finction helps us prevent attack sich as SQL Injection
    $query = "update data
              set 
              nama = '".$conn->real_escape_string($nama)."',
              jenkel = '".$conn->real_escape_string($jenkel)."',
              alamat = '".$conn->real_escape_string($alamat)."' 
              where id = '$id' ";
    // execute the query
    if ( $conn->query($query) ) {
      // if saving success
      echo "User was update. ";
      // redirect to index page
      header('location:index.php?msg=update');
    } else {
      echo "Database error : Unable to update record.";
    }
    // close database
    $conn->close();
  }
include 'config.php';
  // select the sepcific database record to update
  $query = "select id, nama, jenkel, alamat from data where id='".$_REQUEST['id']."' limit 0,1";
  // execute the query
  $result = $conn -> query( $query );
  // get the result
  $row = $result->fetch_assoc();
  // assign the result to fill the form
  $id = $row['id'];
  $nama = $row['nama'];
  $jenkel = $row['jenkel'];
  $alamat = $row['alamat'];
  ?>

  <form action="#" method="POST">
  <table>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
      <select name="jenkel">
          <option value="<?php echo $jenkel ?>"><?php echo $jenkel ?></option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><textarea name="alamat"><?php echo $alamat ?></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="action" value="update">
        <input type="submit" value="Simpan">
      </td>
    </tr>
  </table>
  </form>
</body>
</html>