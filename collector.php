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
$password = md5($_POST['password']);

     // password hash

    //  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
// prepare 

$sql=$handler->prepare("INSERT INTO collectors(first_name, last_name, user_name, location, email, phone, national_id, password, registration_date)
        
         VALUES (:first_name, :last_name, :user_name, :location, :email, :phone, :national_id, :password, NOW())");

//Execute

$sql->execute(array(

  ':first_name' => $first,
  ':last_name' => $last,
  ':user_name' => $username,
  ':location' => $location,
  ':email' => $email,
  ':phone' => $phone,
  ':national_id' => $national_id,
  ':password' => $password

));

}else {}
  header("Location: collector_login.php");
?>


<!-- <html>
  <head>
    <title></title>
    <link rel="stylesheet" href="auth/style.css">
  </head>
  <body>
  <div class="form">
<h1>Log In</h1>
<form action="login.php" method="post" name="login">
<input style="color: coral;" type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.html'>Register Here</a></p>
</div>
  </body>
</html> -->
