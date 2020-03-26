
<?php
error_reporting(0);
$dsn = "mysql:host=localhost;dbname=orwms";
$dbUser = "root";
$dbPwd = "";

try{
  $handler = new PDO($dsn, $dbUser, $dbPwd);

  // error mode
  $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOExcepion $e) {
  echo "Connection Failed:". $e->getMessage();
  die();
}
// $id = $_GET['id'];
//Select db data
// $sql = "SELECT * FROM offers WHERE id= 'id'";

// $result=$handler->query($sql);

// // set fetch mode
// $result->setFetchMode(PDO::FETCH_OBJ);
// extract($_POST);

$offer_desc = $_POST['offer_desc'];
$category = $_POST['category'];
$condition = $_POST['condition'];
$qty = $_POST['qty'];
$unit = $_POST['unit'];
$price = $_POST['price'];
$p_terms = $_POST['p_terms'];
$location = $_POST['location'];

if(isset($_POST['buy']))
{
  if(empty($_POST['offer_desc']) || empty($_POST['category']) || empty($_POST['condition ']) || empty($_POST['qty']) || empty($_POST['unit']) || empty($_POST['price']) || empty($_POST['p_terms']) || empty($_POST['location']))
  {
    echo "Fields cant be empty";
    
  } else {
    $stmt=$handler->prepare("INSERT INTO buyer_offer(offer_desc, category, offer_condition, quantity, unit, price, p_terms, location) VALUES(:offer_desc, :category, :condition, :quantity, :unit, :price, :p_terms, :location)");

    $stmt->execute(array(

      ':offer_desc'=> $offer_desc,
      ':category'=> $category,
      ':condition'=> $condition,
      ':quantity'=> $qty,
      ':unit'=> $unit,
      ':price'=> $price,
      ':price'=> $p_terms,
      ':location'=> $location
    ));

    // Bind Values
    /*$stmt->bindParam(':offer_desc', $offer_desc);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':condition', $condition);
    $stmt->bindParam(':quantity', $qty);
    $stmt->bindParam(':unit', $unit);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':price', $p_terms);
    $stmt->bindParam(':location', $location);

    $stmt->execute();*/
  }
}else{

}
?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        /*.activator {
          box-sizing: border-box;
          height: 100px;
          width: 100px;
        }*/
      </style>
    </head>

    <body>

      <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card large sticky-action">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="../bg-img/garbage-2729608_1280.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Buy This Offer<i class="material-icons right">more_vert</i></span>
          <p>
            By purchasing this offer, you will not only be supporting the Collector who posted it here but also you will be contibuting to a safer environment. Thank You 
          </p>
        </div>
        <div class="card-reveal">
          <span class="card-title">Buy Offer<i class="material-icons right">close</i></span>
          <form class="col s12" action="" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <label>Offer Description</label>
                <input type="text" name="offer_desc" value="<?php echo $row->offer_description; ?>">
              </div> 
            </div><!--end row 1-->
            <div class="row">
              <div class="input-field col s6">
                <label>Category</label>
                <input type="text" name="category">
              </div>
              <div class="input-field col s6">
                <label>Condition</label>
                <input type="text" name="condition">
              </div>
            </div><!--end row 2-->
            <div class="row">
              <div class="input-field col s6">
                <label>Quantity</label>
                <input type="text" name="qty">
              </div>
              <div class="input-field col s6">
                <label>Unit</label>
                <input type="text" name="unit">
              </div>
            </div><!--end row 3-->
            <div class="row">
              <div class="input-field col s6">
                <label>Price</label>
                <input type="text" name="price">
              </div>
              <div class="input-field col s6">
                <label>Pricing Terms</label>
                <input type="text" name="p_terms">
              </div>
            </div><!--end row 4-->
            <div class="row">
              <div class="input-field col s12">
                <label>Location</label>
                <input type="text" name="location">
              </div><!--end-->
            </div>
            <button name="buy" class="btn" type="submit">BUY OFFER</button>
            
              </form>

        </div>
       
      </div>

    </div>
        </div>
      </div><!--end container-->
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>