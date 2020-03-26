	<?php 
	$dsn = "mysql:host=localhost;dbname=orwms";
	$user="root";
	$pwd = "";

	try {
		
		$dbh = new PDO($dsn, $user, $pwd);

		// set error mode 
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {
		echo "Connection Failed:". $e->getMessage();
	}

	// $cid = $_GET['id'];

	$sql = "SELECT * FROM offers WHERE id='10'";

	$result = $dbh->query($sql);

	// set fetch mode 
	$result->setFetchMode(PDO::FETCH_OBJ);
	// $result->setFetchMode(PDO::FETCH_ASSOC);

	if ($row=$result->fetch()) {
		// echo "<b>Category:</b>"." ". $row->category;
	}
	 ?>
	 <!DOCTYPE html>
	 <html>
	 <head>
		 <title></title>
		 <style>
		 h4 {
			 text-transform: uppercase;
			 font-size: 1.3rem;
		 }
		 .container {
			 margin: auto;
			 height: 800px;
			 width: 900px;
			 text-align: center;
		 }
		 .fom {
			 height: auto;
			 /* width: 500px; */
			 font-size: 1.4rem;
			 background: coral;
		 }
		 label {
			 display: block;
			 height: 40px;
			 color: #fff;
		 }
		 input[type=text]{
			 padding: 10px 5px;
			 border-radius: 5px;
			 text-align: center;
			 font-size: 15px;
			 text-transform: uppercase;
		 }
		 .btn {
			 padding: 10px;
			 color: #333;
			 margin:10px 10px;
			 background: green;
			 font-size: 16px;
		 }
		 .btn:hover {
			 color: #fff;
		 }
		
		 </style>
	 </head>
	 <body>
	 <div class="container">
	 	<h4>Offer Details</h4>
	 	<form action="" method="POST" class="fom">
			 <label for="category">Category:</label>
			 <input type="text" name="category" value="<?php echo $row->category; ?>">
			 <label for="condition">Condition:</label>			 
			 <input type="text" name="condition" value="<?php echo $row->offer_condition; ?>">
			 <label for="qty">Quantity:</label>
			 <input type="text" name="quantity" value="<?php echo $row->quantity; ?>">
			 <label for="unit">Unit:</label>
			 <input type="text" name="unit" value="<?php echo $row->unit; ?>">
			 <label for="price">Price:</label>			 
			 <input type="text" name="price" value="<?php echo $row->price; ?>">
			 <label for="location">Location:</label>
	 		<input type="text" name="location" value="<?php echo $row->location; ?>"><br>
	 		<input type="submit" name="send" class="btn" value="BUY">

	 	</form>
		 </div>
	 </body>
	 </html>

	 <?php 
	 extract($_POST);
	 $errMsg = "<p> Fields Can not be empty! </p>";
	 if (isset($_POST['send'])) {
	 	if (empty($_POST['category']) || empty($_POST['condition']) || empty($_POST['quantity']) || empty($_POST['unit']) || empty($_POST['price']) || empty($_POST['location'])) {
	 		echo $errMsg;
	 	} else {
	 		// Inser values to the buy_offer db 

	 		$sql = $dbh->prepare("INSERT INTO buy(category, offer_condition, quantity, unit, price, location) VALUES(?, ?, ?, ?, ?, ?)");

	 		$sql->execute(array($category, $condition, $quantity, $unit, $price, $location ));

	 		header('Location: auth/success.php?insert=success');
	 	}
	 }else{}

	 ?>

