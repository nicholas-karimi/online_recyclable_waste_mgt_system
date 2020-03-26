
<?php
//Establish Db connection
session_start();
include "config.php";
extract($_POST);
if (isset($_POST['buy_offer'])) {
  $query =  "INSERT INTO buy_offer(company_name, phone, offer_condition, category, location, material_desc) VALUES('$c_name', '$phone', '$condition', '$category', '$location', '$material_desc')";

  $result = mysqli_query($con, $query);
if($result){
  echo "<font color='green'>Offer Purchase successful !!</font>";
}
else{}

}


$sql = mysqli_query($con, "SELECT * FROM company WHERE company_name = '".$_SESSION['company_name']."'");
$res = mysqli_fetch_assoc($sql);

?>


