<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Insert Record</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h2>Input Data</h2>
  <a href="index.php"><- LIHAT DATA</a>
  <?php 
  // if there's any user action
  $action = isset($_POST['action']) ? $_POST['action'] : "";
  if($action == 'create') { // when user submitted the form
    // conncet to database
    include 'config.php';
    // desc variable
    $nama = $_POST['nama'];
    $jenkel = $_POST['jenkel'];
    $alamat = $_POST['alamat'];
    // $conn->real_escape_string() finction helps us prevent attack sich as SQL Injection
    $query = "insert into data
              set 
              id = '".uniqid()."',
              nama = '".$conn->real_escape_string($nama)."',
              jenkel = '".$conn->real_escape_string($jenkel)."',
              alamat = '".$conn->real_escape_string($alamat)."' ";
    // execute the query
    if ( $conn->query($query) ) {
      // if saving success
      echo "User was created. ";
      // redirect to index page
      header('location:index.php?msg=create');
    } else {
      echo "Database error : Unable to create record.";
    }
    // close database
    $conn->close();
  }
  ?>
  <form action="#" method="POST">
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
      <td>
        <input type="hidden" name="action" value="create">
        <input type="submit" value="Simpan">
      </td>
    </tr>
  </table>
  </form>
</body>
</html>