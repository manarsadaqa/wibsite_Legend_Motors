<?php
session_start();
$database_name = "carshow";
$con = mysqli_connect("localhost","root","","carshow");

if (isset($_POST["add"])){
    if (isset($_SESSION["buy"])){
        $item_array_id = array_column($_SESSION["buy"],"car_id");
        if (!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["buy"]);
            $item_array = array(
                'car_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'car_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["car"][$count] = $item_array;
            echo '<script>window.location="Car.php"</script>';
        }else{
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="Car.php"</script>';
        }
    }else{
        $item_array = array(
            'car_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'car_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])){
    if ($_GET["action"] == "delete"){
        foreach ($_SESSION["buy"] as $keys => $value){
            if ($value["car_id"] == $_GET["id"]){
                unset($_SESSION["car"][$keys]);
                echo '<script>alert("car has been Removed...!")</script>';
                echo '<script>window.location="Car.php"</script>';
            }
        }
    }
}

$query = "SELECT * FROM buycar ORDER BY id ASC ";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="col-md-3">

            <form method="post" action="Car.php?action=add&id=<?php echo $row["id"]; ?>">

                <div class="car">
                    <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                    <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                    <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                    <input type="text" name="quantity" class="form-control" value="1">
                    <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                    <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                           value="buy car">
                </div>
            </form>
        </div>
        <?php
    }
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>
<div style="clear: both"></div>
<h3 class="title2">Shopping Car Details</h3>
<div class="table-responsive">
    <table class="table table-bordered"> ///////table
        <tr>
            <th width="30%">car Name</th>
            <th width="10%">Quantity</th>
            <th width="13%">Price Details</th>
            <th width="10%">Total Price</th>
            <th width="17%">Remove Item</th>
        </tr>

        <?php
        if(!empty($_SESSION["car"])){
            $total = 0;
            foreach ($_SESSION["car"] as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value["item_name"]; ?></td>
                    <td><?php echo $value["item_quantity"]; ?></td>
                    <td>$ <?php echo $value["car_price"]; ?></td>
                    <td>
                        $ <?php echo number_format($value["item_quantity"] * $value["car_price"], 2); ?></td>
                    <td><a href="Car.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                class="text-danger">Remove Item</span></a></td>

                </tr>
                <?php
                $total = $total + ($value["item_quantity"] * $value["car_price"]);
            }
            ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <th align="right">$ <?php echo number_format($total, 2); ?></th>
                <td></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

</div>


</body>
</html>