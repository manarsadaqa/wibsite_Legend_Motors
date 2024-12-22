<?php
$_SESSION['flag']=0;
if(isset($_POST['txtAdminEmail']) && isset($_POST['txtAdminPassword'])) {
    $aemail = $_POST['txtAdminEmail'];
    $apass = $_POST['txtAdminPassword'];

    try {
        $db = new mysqli('localhost', 'root', '', 'carshow');
        $qryStr = "Select * from admin";
        $res = $db->query($qryStr);

            for ($i = 0; $i < $res->num_rows; $i++) {
                $row = $res->fetch_object();
                if ($row->admin_email == $aemail && sha1($apass) == $row->admin_password) {
                    header('Location:admin.html');
                } else {
                    echo "<script>alert('email or password are not correct!!');</script>";
                }
            }
        $db->close();
//        }
//        else{
//            for ($j = 0; $j < $res2->num_rows; $j++) {
//                $row2 = $res2->fetch_object();
//                if ($row2->admin_email == $uemail && sha1($upass) == $row2->admin_password) {
//                    header('Location:admin.html');
//                } else {
//                    echo "<script>alert('email or password are not correct!!');</script>";
//                }
//            }
//            $db->close();
//        }
    } catch
    (Exception $e){

    }
}
?>