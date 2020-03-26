<?php 
session_start();

session_destroy();

header("Location: comp-login.php");