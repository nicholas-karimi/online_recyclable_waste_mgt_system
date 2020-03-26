<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "orwms";

try{
$handler = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

// set PDO error mode to EXCEPTION
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed:".$e->getMessage();
}