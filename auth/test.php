<?php 
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ORWMS Buyers Zone</title>

    <!-- Bootstrap core CSS -->
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bs/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bs/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bs/js/ie-emulation-modes-warning.js"></script>
  <style>
  .navbar {
    background-color: coral;
  }
  .navbar .navbar-brand {
    color: #000;
  } 
  .navbar #navbar ul li {
    color: #000;
  }
  .container-fluid .sidebar {
    background-color: #ccc !important;
    color:#fff;
  }
  </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome <?php echo $_SESSION['company_name']; ?>!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php" style="color:black;">Logout</a></li>
          </ul>
        
        </div>
      </div>
    </nav>

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#!">Dashboard <span class="sr-only">(current)</span></a></li>
			
			
<li><a href="buyer_offer.php?page=select"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View Offers</a></li>
 
<li><a href="buyer_offer.php?page=buy_offers"><span class="glyphicon glyphicon-user"></span> Create Buy Offer</a></li>
   </ul>  
        </div>

   <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="select")
			{
				include('select.php');
			
			}
			
			if($page=="buy_offers")
			{
				include('../select_id.php');
			
			}
			
			// if($page=="notification")
			// {
			// 	include('display_notification.php');
			
			// }
			
			// if($page=="update_notice")
			// {
			// 	include('update_notice.php');
			
			// }
			
			
			
			// if($page=="add_notice")
			// {
			// 	include('add_notice.php');
			
			// }
		  }
		  
		  else
		  {
		  ?>
		  <!-- container end-->
		  
		  
		
		  
		  <h1 class="page-header">Dashboard</h1>

		  
		  <?php } ?>
		  

         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bs/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bs/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bs/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bs/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>