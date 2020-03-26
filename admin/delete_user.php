<?php 
include('../config.php');
$nid=$_GET['id'];

$q=mysqli_query($con,"delete from collectors where id='$nid'");

header('location:index.php?page=manage_users');

?>