<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Display Record</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <h2>Lihat Data</h2>
<?php
// connect to database
include 'config.php';
// query to display all record from database
$query = "select * from data";
// execute the query
$result = $conn -> query($query);
// get num of rows returned
$num_results = $result -> num_rows;

// show message
if ( isset($_GET['msg']) ) {
  if ($_GET['msg'] == 'create') {
    echo "Data has been Added. <br>";
  } 
  elseif ($_GET['msg'] == 'update') {
    echo "Data has been Update. <br>";
  }
  elseif ($_GET['msg'] == 'delete') {
    echo "Data has been Deleted. <br>";
  }
}
?>
  <a href="input_data.php">+ TAMBAH DATA</a>
<?php
if ($num_results > 0) {  // if already record in database
  echo "<table border=1 width=\"80%\">
    <tr>
      <th>No</th>
      <th>ID</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Action</th>
    </tr>";
    $i = 1; // initial the number in the table
    // loop show each reacord
    while ( $row = $result -> fetch_assoc() ) {
      // this will make $row['id'] 
      // extract row to make just {$id} only
      extract($row);
      echo "<tr>
              <td>$i</td>
              <td>{$id}</td>
              <td>{$nama}</td>
              <td>{$jenkel}</td>
              <td>{$alamat}</td>
              <td>
                <a href='edit_data.php?id={$id}'>Edit</a>  ||  
                <a href='delete_data.php?id={$id}' onClick=\"confirm('Anda Yakin Menghapus Data ini ?')\">Delete</a>
              </td>
            </tr>";
      $i++; // increase the value of number
    }
    echo "</table>";
} else {
  echo "No Record Found.";
}
// disconnect from database
$result->free();
$conn->close();
?>
</body>
</html>