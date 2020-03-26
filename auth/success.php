<?php include 'auth2.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    a {
      text-decoration: none;
      color: #1e90ff;
      font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: 1.3rem;
    }
    a:hover {
      background: #333;
      color: #fff;
    }
  .container {
    height: 500px;
    width: 700px;
    margin: auto;
  }
  .success {
    background: green;
    height: 100px;
    width: 500px;
    padding: 20px 20px;
    transition: color 0.5, ease-in-out;
  }
  .success:hover{
    /* width: 100px; */
    color: darkolivegreen;
  }
  h2 {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 1.5rem;
    color: #fff;
  }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="success">
        <h2>Congatulations.. Offer Purchase Successful</h2>

        <a href="buyer_offer.php">Go Back</a>
      </div>
    </header>
  </div>
</body>
</html>