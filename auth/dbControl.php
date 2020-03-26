<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=orwms", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    // if (isset($_POST['post'])) {
		// include 'dbControl.php';

    	$describe = $_POST['describe'];
    	$category = $_POST['category'];
    	$condition = $_POST['condition'];
    	$quantity = $_POST['qty'];
    	$unit = $_POST['unit'];
    	$price = $_POST['price'];
    	$pterms = $_POST['price_terms'];
    	$location = $_POST['location'];
    	$description = $_POST['description'];

		$sql=$conn->prepare("INSERT INTO offers(offer_describe, category, offer_condition, quantity, unit, price, pricing_terms, location, description, post_date)
			VALUES(:offer_describe, :category, :offer_condition, :quantity, :unit, :price, :pricing_terms, :location, :description, NOW())");


		$sql->execute(array(
			':offer_describe' => $describe, 'category' => $category, ':offer_condition' => $condition, ':quantity' => $quantity, ':unit' => $unit, ':price' => $price, ':pricing_terms' => $pterms, ':location' => $location, ':description' => $description
));


	// }

	  ?>
