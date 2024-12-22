<?php
if(isset($_POST['txtNewEmployee_name']) && isset($_POST['txtNewEmployee_id']) && isset($_POST['txtNewEmployee_address'])  && isset($_POST['txtNewEmployee_phone'])  && isset($_POST['txtNewEmployee_birth'])  && isset($_POST['txtNewEmployee_gender'])  && isset($_POST['txtNewEmployee_email'])  && isset($_POST['txtNewEmployee_password']) ) {
    $eid = $_POST['txtNewEmployee_id'];
    $ename = $_POST['txtNewEmployee_name'];
    $eaddress =  $_POST['txtNewEmployee_address'];
    $ephone =  $_POST['txtNewEmployee_phone'];
    $edate =  $_POST['txtNewEmployee_birth'];
    $egender =  $_POST['txtNewEmployee_gender'];
    $eemail =  $_POST['txtNewEmployee_email'];
    $epass = $_POST['txtNewEmployee_password'];
    try {
        $db3 = new mysqli('localhost', 'root', '', 'carshow');
        $qryStr3 = "Insert into `employee` (`employee_id`, `employee_full_name`, `employee_address`, `employee_phone`, `employee_birth_date`, `employee_Gender`, `employee_email`, `employee_password`) VALUES ('".$eid."' ,'".$ename."', '".$eaddress."', '".$ephone."', '".$edate."', '".$egender."','".$eemail."',SHA1('".$epass."'))";
        $db3->query($qryStr3);
        $db3->commit();
        $db3->close();
        header('Location:employee.php');
    } catch (Exception $e) {
        echo "Employee ID is user ,choose another";
    }
}
?>

