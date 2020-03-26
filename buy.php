  <?php 
include('auth/connection.php');

// Select table data
$sql = "SELECT * FROM offers";

$result=$conn->query($sql);
// set fetch mode
$result->setFetchMode(PDO::FETCH_OBJ);

echo $result->category;

  ?>