<?php
  session_start();

include 'config.php';
if(isset($_POST) || !empty($_POST)){
  $c_name = mysqli_real_escape_string($con, $_POST['c_name']);
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM company WHERE company_name='$c_name' AND password='$password'";
  $result = mysqli_query($con, $sql);

   $resultCheck = mysqli_num_rows($result);
   if($resultCheck == 1){
    $_SESSION['company_name'] = $c_name;
   }else {
     echo "Invalid name or password";
   }

}
if(isset($_SESSION['company_name'])){
header("Location: ../auth/select.php");
exit();
}


?>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <form action="" method="POST">
      <label for="cname">Company name</label>
      <input type="text" name="c_name" placeholder="Company Name" >

      <label for="password">Password</label>
      <input type="password" name="password" id="">

      <input type="submit" value="Login">
    </form>
  </body>
</html>