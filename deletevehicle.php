<?php

if (isset($_POST["txtDeleteVehicle_id"])) {
    $id2 = $_POST["txtDeleteVehicle_id"];

    $db6 = new mysqli('localhost', 'root', '', 'carshow');

    $sql = "DELETE FROM vehicle WHERE vehicle_id=$id2";
    $db6->query($sql);

}
header('Location:vehicle.php');
exit;

?>

