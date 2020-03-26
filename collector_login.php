<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="auth/style.css" />
<link rel="stylesheet" href="auth/reset.css" />

<style>
     .container{
    height: 70vh;
    margin: 0 auto;
     /* background-image: url('bg-img/pexels-photo-719609.jpeg');
     background-size: cover;
		 background-repeat: no-repeat; */
		 background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
     font-weight: bold;
     font-size: 1.2rem;
      }
    form {
        text-align: center;
        height: 50vh;
      }
      h1 {
				text-align: center;
				text-transform: uppercase;
				padding-top: 10px;
			}
			p {
				text-align: center;
			}
    </style>
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

//    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

	//Checking is user existing in the database or not
  $query = "SELECT * FROM `collectors` WHERE user_name='$username'
						and password = '".md5($password)."'";

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
<div class="container">
<h1>collector LogIn</h1>
<form action="" method="post" name="login">
<input style="color: coral;" type="text" name="username" placeholder="Username" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input name="submit" type="submit" value="Login" />

<p>Not registered yet? <a href='registration.html'>Register Here</a></p>

</form>
</div>
<?php } ?>
</body>
</html>
