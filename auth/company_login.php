<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php
  $con = mysqli_connect("localhost","root","","orwms");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  ?>

<?php
session_start();
// If form submitted, insert values into the database.
$email = "style:color=green";

if (isset($_POST['email'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);

	//Checking is user existing in the database or not
  $query = "SELECT * FROM `company` WHERE email='$email'
						and password='".md5($password)."'";

	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $email;
            // Redirect user to index.php
	    header("Location: select.php");
         }else{
	echo "<div class='form'>
<h3>Email/password is incorrect.</h3>
<br/>Click here to <a href='company_login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input style="color: coral;" type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='company-reg.html'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>
