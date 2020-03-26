<?php
  session_start();

include 'config.php';

error_reporting(0);

if(isset($_POST) || !empty($_POST)){
  $c_name = mysqli_real_escape_string($con, $_POST['c_name']);
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM company WHERE company_name='$c_name' AND password='$password'";
  $result = mysqli_query($con, $sql);

   $resultCheck = mysqli_num_rows($result);
   if($resultCheck == 1){
    $_SESSION['company_name'] = $c_name;
   }else {}

}
if(isset($_SESSION['company_name'])){
header("Location: buyer_offer.php");
exit();
}


?>

<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="reset.css">

    <style>
     .container{
    height: 70vh;
    margin: 0 auto;
     /* background-image: url('../bg-img/pexels-photo-1103970.jpeg');
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
      
    </style>
  </head>
  <body>
    <div class="container">
    <form action="" method="POST">
      <label for="cname">Company name</label><br>
      <input type="text" name="c_name" placeholder="Company Name" required><br><br>

      <label for="password">Password</label><br>
      <input type="password" name="password" id="" required><br><br>

      <input type="submit" value="Login">

      <p>Not Registered ? Click here <a href="company-reg.html">Register</a></p>
    </form>

    </div>
  </body>
</html>