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
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->

    <!-- Link Style CSS -->
  <link rel="stylesheet" href="employee_style.css">

  <title>Car Website | Easy Coding</title>
</head>

<body>
<!--<script src="index.js" ></script>-->
<!-- Header/Navbar Start -->
<header>
<!--  <a href="user.html"> go to </a>-->

  <div id="MenuBtn" class="fas fa-bars"></div>

  <a href="#" class="logo"><span>L</span>egend Motors</a>

  <nav class="navbar">
    <a href="admin.html">HOME</a>
    <a href="employee.php">EMPLOYEE</a>
    <a href="vehicle.php">VEHICLE</a>
    <a href="count.html">COUNT</a>

  </nav>
  <div id="AddEmployee">
    <button class="btn">Add Employee</button>
  </div>
  <div id="DeleteEmployee">
    <button class="btn">Delete Employee</button>
  </div>
  <form action="index.php">
  <div id="LoginBtn">
    <button class="btn">LOGOUT</button>
  </div>
  </form>
</header>
<!-- Header/Navbar End -->

<!-- Home Section Start -->
<section id="Home" class="home" style="margin: 100px;">
    <table class="table-box" >
        <thead  >
        <tr>
            <th  class=" table-head"> Full Name </th>
            <th class="table-head">Employee ID </th>
            <th class="table-head">Address</th>
            <th class="table-head">phoneNumber </th>
            <th class="table-head">Birth Date </th>
            <th class="table-head">Gender</th>
            <th class="table-head">Email </th>
        </tr>
        </thead>
        <tbody>
        <?php
        $db5 = new mysqli('localhost', 'root', '', 'carshow');

        if ($db5->connect_error)
        {
            die("Connection failed: .$db5->connect_error");
        }
        $sql = "Select * from employee ";
        $result = $db5->query($sql);

        if(!$result){
            die("Invalid query: ".$db5->error);
        }

        while ($row =$result->fetch_assoc())
        {
            echo "
        <tr >
            <td   class='table-cell'>".$row["employee_full_name"]."</td>
            <td  class='table-cell'> ".$row["employee_id"]."</td>
            <td  class='table-cell'>".$row["employee_address"]." </td>
            <td  class='table-cell'> ".$row["employee_phone"]."</td>
            <td  class='table-cell'> ".$row["employee_birth_date"]."</td>
            <td  class='table-cell'> ".$row["employee_Gender"]."</td>
            <td  class='table-cell' >".$row["employee_email"]." </td>
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

  <form action="addemployee.php" method="post">
    <h3>Add Employee</h3>
    <input type="text" id="txtNewEmployee_name"  name="txtNewEmployee_name" placeholder="Full Name" required class="box">
    <input type="text" id="txtNewEmployee_id" name="txtNewEmployee_id"placeholder="ID" required class="box">
    <input type="text" id="txtNewEmployee_address" name="txtNewEmployee_address" placeholder="Address" required class="box">
    <input type="text"  id="txtNewEmployee_phone" name="txtNewEmployee_phone" placeholder="Phone Number" required class="box">
    <input type="Date"  id="txtNewEmployee_birth"  name="txtNewEmployee_birth" placeholder="Birth Date" required class="box">
    <input type="text"  id="txtNewEmployee_gender" name="txtNewEmployee_gender" placeholder="Gender" required class="box">
    <input type="email" id="txtNewEmployee_email" name="txtNewEmployee_email" placeholder="Email" required class="box">
    <input type="password" id="txtNewEmployee_password" name="txtNewEmployee_password" placeholder="Password" required class="box">
<!--    <input type="password" placeholder="Confirm Password" required class="box">-->
      <div>
          <button class="btn" id="addempl">Add</button>
      </div>
  </form>

</div>
<!-- AddEmployee Form Container/Popup -->

<!-- deleteEmployee Form Container/Popup -->
<div class="DeleteEmployeeFormContainer">
  <span id="CloseDeleteEmployee" class="fas fa-times"></span>

  <form action="deleteemployee.php" method="post">
    <h3>Delete Employee</h3>
    <input type="text" id="txtDeleteEmployee_id" name="txtDeleteEmployee_id"  placeholder="Employee ID" required class="box">
    <div class="buttons">
      <button class="btn" id="deleteempl">Delete</button>
<!--      <button class="btn">Cancel</button>-->
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