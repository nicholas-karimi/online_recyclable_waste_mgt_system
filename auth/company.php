  <?php
  // Include Db connection
  include 'connection.php';

  // Set Variables
  $company_name = $_POST['name'];
  $email = $_POST['email'];
  $category = $_POST['category'];
  $location = $_POST['location'];
  $phone = $_POST['phone'];
  $password = md5($_POST['password']);

  // hash password
  // $hash = password_hash($password, PASSWORD_DEFAULT);

if (isset($_POST['reg_company']))
 {
  // create query
  $query=$conn->prepare("INSERT iNTO company(company_name, email, category, location, phone, password, reg_date)  VALUES(?, ?, ?, ?, ?, ?, NOW())");


  // execute
  $query->execute(array($company_name, $email, $category, $location, $phone, $password));

} else {
}
// echo "Company Registration was successful:";

header("Location: comp-login.php?login=success");
    ?>
