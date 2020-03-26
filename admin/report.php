	<?php

	$dsn = "mysql:host=localhost;dbname=orwms";
	$user = "root";
	$password = "";

		try {

			$dbh = new PDO($dsn, $user, $password);

			// set err mode

			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		} catch (PDOException $e) {
			echo "Connection failed:". $e->getMessage();
			die();
		}

		$sql = "SELECT * FROM collectors";

		$result = $dbh->query($sql);

		// set fetch mode
		$result->setFetchMode(PDO::FETCH_OBJ);

		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>ORWMS REPORT</title>
			<!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" media="print">
<style>
	.thead-dark {
		background: #e8eaf6;
		color: #000;
		text-transform: uppercase;
	}
	
	h4 {
		text-transform: uppercase;
		font-size: 1.2rem;
		color: #000;
	}
	.hideBtn {
		visibility: hidden;
	}
	
	/*body {visibility:hidden;}*/
	/*.print {visibility:visible;}*/
	.btn {
		float: right;
		right: 80px;
		background: navy;
		position: fixed;
	}
</style>
		</head>
		<body>
			<button id="hideBtn" onclick="printPage()" class="btn tooltipped" data-postion="right" data-tooltip="print"><i class="large material-icons">print</i></button>
			<!-- <div class="container"> -->
		<h4>Registered Collectors</h4>
		<table class="highlight">
			<thead class="thead-dark">
			<tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Location</th>
                <th>Mobile</th>
           
            </tr>
        </thead>

         <?php while($row=$result->fetch()): ?>
         	<tr>
         		<td><?php echo $row->first_name; ?></td>
         		<td><?php echo $row->last_name; ?></td>
         		<td><?php echo $row->location; ?></td>
         		<td><?php echo $row->phone; ?></td>

         	</tr>
         <?php endwhile; ?>
		</table>
		<h4>Registered Companies</h4>
		<?php
		$sql = "SELECT * FROM company";
		$result=$dbh->query($sql);

		$result->setFetchMode(PDO::FETCH_OBJ);
		?>
		<table class="highlight">
			<thead class="thead-dark">
			<tr>
                <th>Company Name</th>
                <th>Category</th>
                <th>Location</th>
                <th>Mobile</th>
           
            </tr>
            </thead>
         <?php while($row=$result->fetch()): ?>
         	<tr>
         		<td><?php echo $row->company_name; ?></td>
         		<td><?php echo $row->category; ?></td>
         		<td><?php echo $row->location; ?></td>
         		<td><?php echo $row->phone; ?></td>

         	</tr>
         <?php endwhile; ?>
		</table>
		<!-- OFFERS REPORT -->
		<h4>OFFERS POSTED</h4>
		<?php 
		$sql = "SELECT * FROM offers LIMIT 3";
		$result = $dbh->query($sql);

		$result->setFetchMode(PDO::FETCH_OBJ);

		?>
		<table class="highlight">
			<thead class="thead-dark">
            <tr>
                <th>Offer Description</th>
                <th>Category</th>
                <th>Condition</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Price</th>
                <th>Pricing Terms</th>
                <th>Location</th>
                <th>Post Date</th>
                
            </tr>
            </thead>
            <?php while($row=$result->fetch()): ?>
            
                <tr>
                    <td><?php echo $row->offer_describe; ?></td>
                    <td><?php echo $row->category; ?></td>
                    <td><?php echo $row->offer_condition; ?></td>
                    <td><?php echo $row->quantity; ?></td>
                    <td><?php echo $row->unit; ?></td>
                    <td><?php echo $row->price; ?></td>
                    <td><?php echo $row->pricing_terms; ?></td>
                    <td><?php echo $row->location; ?></td>
                    <td><?php echo $row->post_date; ?></td>
                    

                </tr>
             <?php endwhile; ?>
        </table>
        <!-- <button onclick="window.print();return false;">PRINT</button> -->
<!-- </div> -->
 
         <!--  Scripts-->
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="../js/materialize.js"></script>
   <script src="../js/init.js"></script>
   <script>
   	$(document).ready(function(){
   		$('.tooltipped').tooltip();
   	});
   	function printPage() {
   		window.print();
   	}
   </script>
 
</body>
</html>