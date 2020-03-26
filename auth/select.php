
    <?php

include 'auth2.php';

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
    //Create select query
    $sql = "SELECT * FROM offers";

    $result = $conn->query($sql);

    // Set fetch mode

    $result->setFetchMode(PDO::FETCH_OBJ);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <title>View Offers</title>
    </head>
    <body>
        <table class="responsive-table">
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
                <th>Buy</th>
            </tr>
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
                    <td><a class="btn modal-trigger waves-effect waves-light btn-small white-text" href="../select_id.php" >Buy Offer</a></td>

                </tr>
             <?php endwhile; ?>
        </table>

   

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>
        $(document).ready(function(){
            $('.modal').modal();
        });
        </script>
    </body>
    </html>

   