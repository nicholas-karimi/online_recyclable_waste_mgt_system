
<?php
include 'auth.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Online Recyclable Waste Management system</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
  body {
    /* background: url('../bg-img/pexels-photo-268533.jpeg'); 
    background-size: cover;
    backgroud-repeat: no-repeat; */
    background: #ffe0b2;
  }
  .container form label {
    /* color: #fff; */
  }
  </style>
</head>
<body>
  <nav>
    <div class="nav-wrapper">

      <a href="#!" class="brand-logo">Welcome <?php echo $_SESSION['username']; ?>&nbsp;&nbsp; to ORWMS Market Place</a>
      <ul class="right hide-on-med-and-down">
      <li><a class="waves-effect waves-red btn-small"  href="logout.php">Log Out</a>
      </li>
        <!-- <li>
          <a class="waves-effect waves-light btn-small">Sell</a></li>
          <li>
          <a class="waves-effect waves-light btn-small">Buy</a></li> -->
        </ul>
    </div>

  </nav>

    <div class="container">
      <h3>Post an Offer</h3>

      <div class="row">
        <form action="offers.php" class="col s12" method="POST">
          <div class="row">
            <div class="input-field col s12">
              <label for="product">What are you selling?</label>
              <input  id="your_prod" type="text" class="validate" name="describe" required>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s6">
              <label for="category">Category</label><br>
              <select name="category" id="" required>
                <option value="" disabled selected>Choose category</option>
                <option value="Plastic">Plastic</option>
                <option value="Glass">Glass</option>
                <option value="Paper">Paper</option>
                <option value="Textile">Textile</option>
              </select>
            </div>
            <div class="input-field col s6">
                <label for="condition">Condition</label><br>
                <select name="condition" id="" required>
                  <option value="" disabled selected>Choose condition</option>
                  <option value="Baled">Baled</option>
                  <option value="Mixed">Mixed</option>
                </select>
              </div>
              </div>
              <div class="row">
              <div class="input-field col s6">
                <label for="qty">Quantity</label><br>
                <input tabIndex type="number" min="0" max="5000" name="qty" required>
              </div>
              <div class="input-field col s6">
                <label for="unit">Unit</label><br>
                <select name="unit" id="" required>
                  <option value="1"disabled selected>Choose a unit.</option>
                  <option value="kg">Kg</option>
                  <option value="tonn">Tonnes</option>
                </select>
              </div>
              </div>
              <div class="row">
                  <div class="input-field col s6">
                    <label for="qty">Price per unit</label><br>
                    <input tabIndex type="number" min="0" max="1000" name="price" required>
                  </div>
                  <div class="input-field col s6">
                      <label for="pricing">Pricing term</label><br>
                      <select name="price_terms" id="" required>
                        <option value=""disabled selected>Choose a pricing term.</option>
                        <option value="KES">KES</option>
                        <option value="$US">$US</option>
                      </select>
                    </div>
                  </div>
              <div class="row">
                <div class="col input-field s12">
                    <label for="product">Pick up location</label><br>
                    <!-- <input  id="your_prod" type="text" id="autocomplete-input" class="autocomplete" name="location"> -->
                    <select class="" name="location" required>
                      <option value="1" selected disabled></option>
                      <option value="Old Town">Old Town</option>
                      <option value="Mwakirunge">Mwakirunge</option>
                      <option value="Kibokoni">Kibokoni</option>
                      <option value="Majengo">Majengo</option>
                    </select>
                </div>
              </div>
         <!--  <div class="row">
            <div class="col s12">
              <label for="description">Description</label>
              
              <input  id="your_prod" type="text" class="validate" name="description" required>
            </div>
          </div> -->
          <div class="clear"></div>
          <p class="center">
        <input type="submit" name="post" value="POST">
          </p>
          </div>
        </form>
      </div>

    </div>

   <!--  Scripts-->
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="js/materialize.js"></script>
   <script src="js/init.js"></script>

   <script>
   $(document).ready(function(){

      $(".dropdown-trigger").dropdown({hover: false});
      $('select').formSelect();
      $('.modal').modal();
   });


   </script>
</body>
</html>
