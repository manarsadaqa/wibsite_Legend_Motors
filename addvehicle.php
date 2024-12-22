<?php
if(isset($_POST['txtNewVehicle_name']) && isset($_POST['txtNewVehicle_id']) && isset($_POST['txtNewVehicle_category'])  && isset($_POST['txtNewVehicle_model'])  && isset($_POST['txtNewVehicle_engine_power'])  && isset($_POST['txtNewVehicle_fuel_type'])  && isset($_POST['txtNewVehicle_goar'])  && isset($_POST['txtNewVehicle_color'])  && isset($_POST['txtNewVehicle_Date']) ) {
    $vvid = $_POST['txtNewVehicle_id'];
    $vvname = $_POST['txtNewVehicle_name'];
    $vcategory =  $_POST['txtNewVehicle_category'];
    $vmodel =  $_POST['txtNewVehicle_model'];
    $vengine=  $_POST['txtNewVehicle_engine_power'];
    $vgoar =  $_POST['txtNewVehicle_goar'];
    $vcolor =  $_POST['txtNewVehicle_color'];
    $vdate = $_POST['txtNewVehicle_Date'];
    $vfuel = $_POST['txtNewVehicle_fuel_type'];
    try {
        $db4 = new mysqli('localhost', 'root', '', 'carshow');
        $qryStr4 = "Insert into `vehicle` (`vehicle_id`, `vehicle_name`, `vehicle_category`, `vehicle_model`, `vehicle_engin_power`, `vehicle_fuel_Type`, `vehicle_goar`, `vehicle_color`, `vehicle_expiry_date`) VALUES ('".$vvid."' ,'".$vvname."', '".$vcategory."', '".$vmodel."', '".$vengine."', '".$vfuel."','".$vgoar."','".$vcolor."','".$vdate."')";
        $db4->query($qryStr4);
        $db4->commit();
        $db4->close();
        header('Location:vehicle.php');
    } catch (Exception $e) {
        echo "Vehicle ID is user ,choose another";
    }
}
?>

