<?php

if(isset($_POST['user_reg'])){

  
include "connect.php";

$first = $_POST['fname'];
$last = $_POST['lname'];
$username = $_POST['uname'];
$location = $_POST['location'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$national_id = $_POST['nat_id'];
$password = $_POST['password'];

     // password hash

     $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

if(empty($first) || empty($last) || empty($username) || empty($location) || empty($email) || empty($phone) || empty($national_id) || empty($password)){

  header("Location: collector_reg.php?collector_reg=empty");
  exit();

} else {
  if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z]*$/", $phone) || !preg_match("/^[a-zA-Z]*$/", $national_id)){
    header("Location: collector_reg.php?collector_reg=invalid inputs");
     exit();
  } else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: collector_reg.php?collector_reg=email invalid");
      exit();
    } else {
      $sql = "SELECT * FROM collectors WHERE user_name = '$username'";
      $result = mysqli_query($handler, $sql);
      $resultCheck = mysqli_num_rows($sql);

      if($resultCheck > 1) {
        header("Location: collector_reg.php?collector_reg=username taken");
        exit();
      }else {
        
        $sql = "INSERT INTO collectors (first_name, last_name, user_name, location, email, phone, national_id, password, registration_date)
               VALUES('$first', '$last', '$username', '$location', '$email', '$phone', '$national_id', '$hashedPwd', NOW())";

      }
    }
  }
}

}else {
  header("Location: login.html");
}

?>