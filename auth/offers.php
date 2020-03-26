	<?php
	if (isset($_POST['post'])) {
		include 'connection.php';

		$describe = $_POST['describe'];
		$category = $_POST['category'];
		$condition = $_POST['condition'];
		$quantity = $_POST['qty'];
		$unit = $_POST['unit'];
		$price = $_POST['price'];
		$terms = $_POST['price_terms'];
		$location = $_POST['location'];
		// $description = $_POST['description'];

		$query=$conn->prepare("INSERT INTO offers(offer_describe, category, offer_condition, quantity, unit, price, pricing_terms, location, post_date)
									VALUES(:offer_describe, :category, :offer_condition, :quantity, :unit, :price, :pricing_terms, :location, NOW())");

		// execute

		$query->execute(array(
			':offer_describe' => $describe,
			':category' => $category,
			':offer_condition' => $condition,
			':quantity' => $quantity,
			':unit' => $unit,
			':price' => $price,
			':pricing_terms' => $terms,
			':location' => $location
		));

	}
// echo "<script> alert('Offer Poster)</script>";
header('Location: dashboard.php?offers=success');

	 ?>
