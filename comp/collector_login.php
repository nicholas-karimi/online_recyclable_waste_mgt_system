<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
include 'config.php';
session_start();
// If form submitted, insert values into the database.
$username = "style:color=green";

if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
  	$password = mysqli_real_escape_string($con,$password);
  
   // password hash

   $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

	//Checking is user existing in the database or not
  $query = "SELECT * FROM `collectors` WHERE user_name='$username'
						and password = $password ";

	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: auth/dashboard.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='collector_login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input style="color: coral;" type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.html'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>
