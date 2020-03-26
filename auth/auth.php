<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../collector_login.php");
exit(); }
?>