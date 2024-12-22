<?php
$_SESSION['flag']=0;
if(isset($_POST['txtUserEmail']) && isset($_POST['txtUserPassword'])) {
    $uemail = $_POST['txtUserEmail'];
    $upass = $_POST['txtUserPassword'];

    try {
        $db = new mysqli('localhost', 'root', '', 'carshow');
        $qryStr = "Select * from user";
        $res = $db->query($qryStr);

            for ($i = 0; $i < $res->num_rows; $i++) {
                $row = $res->fetch_object();
                if ($row->user_email == $uemail && sha1($upass) == $row->user_password) {
                    header('Location:user.html');
                } else {
                    echo "<script>alert('email or password are not correct!!');</script>";
                }
//            }
        }

        $db->close();

    } catch
    (Exception $e){

        }
}
?>