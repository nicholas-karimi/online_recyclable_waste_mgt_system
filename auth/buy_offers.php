<?php error_reporting(0); ?>
<?php include 'buy_offer.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Online recyclable waste management system</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="container">
  <h3 class="center">Create Buy Offer</h3>
  <div class="row">
      <form action="buy_offer.php" class="col s12" method="POST">
    <div class="input-field col s6">
      <label for="c_name">Company Name</label>
      <input type="text" name="c_name" value="<?php echo $res['company_name']; ?>" required>
    </div>
    <div class="input-field col s6">
        <label for="phone">Phone</label>
        <input type="tel" name="phone" value="<?php echo $res['phone'];?>" required>
      </div>
  </div>
  <div class="row">
      <div class="input-field col s6">
        <label for="condition">Condition</label><br>
        <input type="text" name="condition" value="" required>
      </div>
      <div class="input-field col s6">
      <label for="category">Category</label><br>
       <input type="text" name="category" value="" required>
    </div>
</div>
<div class="row">
  <div class="input-field col s6">
    <label for="location">Location</label><br>
    <input type="text" name="location" value="<?php echo $res['location'];?>" required>
  </div>
  <div class="input-field col s6">
    <label for="description">Material description</label><br>
    <input type="text" name="material_desc" required>
  </div>
</div>

<p class="center">
  <button class="btn waves-effect waves-light" name="buy_offer">SUBMIT</button>
</p>
</form>
</div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script>
  $(document).ready(function(){
    $('select').formSelect();
  });

  </script>

  </body>
</html>
