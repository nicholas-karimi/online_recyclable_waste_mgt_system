

<?php
require('config.php');
// If form submitted, insert values into the database.
if (isset($_POST['user_reg'])){
        // removes backslashes
	$username = stripslashes($_POST['uname']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$first_name = stripslashes($_POST['fname']);
	$last_name = stripslashes($_POST['lname']); 
	$email = stripslashes($_POST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$national_id = stripslashes($_POST['nat_id']);
	$phone = stripslashes($_POST['phone']);
	$location = stripslashes($_POST['location']);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$reg_date = date("Y-m-d H:i:s");

$query = "INSERT into `collectors` (first_name, last_name, user_name, location, email, phone, national_id, password, registration_date)
            VALUES ('$username', '$first_name', '$last_name', '$email', '$national_id', '$phone', '$location''".md5($password)."', '$reg_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{}
?>
