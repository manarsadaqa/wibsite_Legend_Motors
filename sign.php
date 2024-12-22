<?php
if(isset($_POST['txtNewUser_id']) && isset($_POST['txtNewUser_name']) && isset($_POST['txtNewUser_email'])  && isset($_POST['txtNewUser_password'])) {
    $uid = $_POST['txtNewUser_id'];
    $uname = $_POST['txtNewUser_name'];
    $uemail = $_POST['txtNewUser_email'];
    $upass = $_POST['txtNewUser_password'];
    try {
        $db = new mysqli('localhost', 'root', '', 'carshow');
        $qryStr = "Insert into `user` (`user_id`,`user_name`,`user_email`,`user_password`) VALUES ('".$uid."' ,'".$uname."', '".$uemail."', SHA1('".$upass."'))";
        $db->query($qryStr);
        $db->commit();
        $db->close();
        header('Location:user.html');
    } catch (Exception $e) {
        echo "User ID is user ,choose another";
    }
}
?>

//if(empty($_post["name"])){
//    dia("name is required");
//}
//if (! filter_var($_post["email"],FILTER_VALIDANT_EMAIL)){
//    dia("valid email is required");
//}
//if(strlen ($_post["password"]) < 8){
//    dia("password must contain at least one letter");
//}
//if(! preg_match("/[a-z]/i",$_post["password"]))
//{
//    dia("password must contain at least one letter");
//}
//if(! preg_match("/[0-9]/i",$_post["password"]))
//{
//    dia("password must contain at least one number");
//}
//if($_post["password"] !== $_post["password_confirmation"])
//{
//    dia("password must match ");
//}
//$password_hash=password_hash($_post["password"],PASSWORD_DEFAULT);
//print_rs($_post);
//var_dump($password_hash);