<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["company_name"])){
header("Location: comp-login.php");
exit(); }
?>