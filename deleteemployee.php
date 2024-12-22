<?php
if(isset($_POST["txtDeleteEmployee_id"])){
    $id =$_POST["txtDeleteEmployee_id"];

    $db5 = new mysqli('localhost', 'root', '', 'carshow');

    $sql = "DELETE FROM employee WHERE employee_id=$id";
    $db5->query($sql);

}
header('Location:employee.php');
exit;


?>
