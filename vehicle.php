<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" />


    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Link Style CSS -->
    <link rel="stylesheet" href="vehicle_style.css">

    <title>Car Website | Easy Coding</title>
</head>

<body>
<!--<script src="index.js" ></script>-->
<!-- Header/Navbar Start -->
<header>
<!--    <a href="user.html"> go to </a>-->

    <div id="MenuBtn" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>L</span>egend Motors</a>

    <nav class="navbar">
        <a href="admin.html">HOME</a>
        <a href="employee.php">EMPLOYEE</a>
        <a href="vehicle.php">VEHICLE</a>
        <a href="count.html">COUNT</a>

    </nav>

    <div id="AddEmployee">
        <button class="btn">Add Vehicle</button>
    </div>
    <div id="DeleteEmployee">
        <button class="btn">Delete Vehicle</button>
    </div>
    <form action="index.php">
        <div id="LoginBtn">
            <button class="btn">LOGOUT</button>
        </div>
    </form>

</header>
<!-- Header/Navbar End -->

<!-- Home Section Start -->
<section id="Home" class="home">

    <table class="table-box" >
        <thead  >
        <tr>
            <th  class=" table-head"> Name Of Vehicle</th>
            <th class="table-head">ID Of Vehicle</th>
            <th class="table-head">Category</th>
            <th class="table-head">Model </th>
            <th class="table-head">Engine Power </th>
            <th class="table-head">Fual Type </th>
            <th class="table-head">Goar</th>
            <th class="table-head">Color</th>
            <th class="table-head">Expiry Date Of Insurance</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $db6 = new mysqli('localhost', 'root', '', 'carshow');

        if ($db6->connect_error)
        {
            die("Connection failed: .$db6->connect_error");
        }
        $sql = "Select * from vehicle ";
        $result = $db6->query($sql);

        if(!$result){
            die("Invalid query: ".$db6->error);
        }

        while ($row =$result->fetch_assoc())
        {
            echo "
        <tr >
            <td   class='table-cell'>".$row["vehicle_name"]."</td>
            <td  class='table-cell'> ".$row["vehicle_id"]."</td>
            <td  class='table-cell'>".$row["vehicle_category"]." </td>
            <td  class='table-cell'> ".$row["vehicle_model"]."</td>
            <td  class='table-cell'> ".$row["vehicle_engin_power"]."</td>
            <td  class='table-cell'> ".$row["vehicle_fuel_Type"]."</td>
            <td  class='table-cell' >".$row["vehicle_goar"]." </td>
            <td  class='table-cell' >".$row["vehicle_color"]." </td>
            <td  class='table-cell' >".$row["vehicle_expiry_date"]." </td>
        </tr>";
        }
        ?>
        </tbody>


    </table>

</section>
<!-- Home Section End -->

<!-- addEmployee Form Container/Popup -->
<div class="AddEmployeeFormContainer">
    <span id="CloseAddEmployee" class="fas fa-times"></span>

    <form action="addvehicle.php" method="post">
        <h3>Add Vehicle</h3>
        <input type="text" id="txtNewVehicle_name"  name="txtNewVehicle_name" placeholder="Name Of Vehicle" required class="box">
        <input type="text" id="txtNewVehicle_id" name="txtNewVehicle_id" placeholder="ID Of Vehicle" required class="box">
        <input type="text" id="txtNewVehicle_category" name="txtNewVehicle_category" placeholder="Category" required class="box">
        <input type="text"  id="txtNewVehicle_model" name="txtNewVehicle_model" placeholder="Model" required class="box">
        <input type="text" id="txtNewVehicle_engine_power" name="txtNewVehicle_engine_power" placeholder="EnginePower" required class="box">
        <input type="text" id="txtNewVehicle_fuel_type" name="txtNewVehicle_fuel_type" placeholder="FuelType" required class="box">
        <input type="text" id="txtNewVehicle_goar" name="txtNewVehicle_goar" placeholder="Gear" required class="box">
        <input type="text" id="txtNewVehicle_color" name="txtNewVehicle_color" placeholder="Color" required class="box">
        <input type="Date" id="txtNewVehicle_Date" name="txtNewVehicle_Date" placeholder="Expiry Date Of Insurance" required class="box">

        <div>
            <button class="btn">Add</button>
        </div>
    </form>

</div>
<!-- AddEmployee Form Container/Popup -->

<!-- deleteEmployee Form Container/Popup -->
<div class="DeleteEmployeeFormContainer">
    <span id="CloseDeleteEmployee" class="fas fa-times"></span>

    <form action="deletevehicle.php" method="post">
        <h3>Delete Vehicle</h3>
        <input type="text" id="txtDeleteVehicle_id"  name="txtDeleteVehicle_id" placeholder="Vehicle ID" required class="box">
        <div>
            <button class="btn" id="deleteveh">Delete</button>
        </div>
    </form>

</div>
<!-- deleteEmployee Form Container/Popup -->


<!-- Theme Toggle  -->
<div class="themeToggle">

    <div class="ToggleBtn">
        <i class="fas fa-cog"></i>
    </div>
    <h3>Choose Color</h3>
    <div class="buttons">

        <div class="themeBtn" style="background: #0011ff;"></div>
        <div class="themeBtn" style="background: #ffb404;"></div>
        <div class="themeBtn" style="background: #2bff00;"></div>
        <div class="themeBtn" style="background: #fc00dbe6;"></div>
        <div class="themeBtn" style="background: #cb5805;"></div>
        <div class="themeBtn" style="background: #ff041d;"></div>

    </div>

</div>



<!-- Swiper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
<!-- Script For JS -->
<script src="admin_java.js"></script>

</body>

</html>
