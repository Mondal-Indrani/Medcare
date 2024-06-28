<?php
include 'connection.php';
if(isset($_GET['rejectid'])){
    $id = $_GET['rejectid'];

    $sql = "UPDATE `reservation` SET `status`='Rejected' WHERE r_id = '$id'; ";
    $result = mysqli_query($conn,$sql);
    if ($result){
        //echo "deleted sucessfully";
        header('location:show_re_admin.php');
    }

    else {
        die(mysqli_error($conn));
    }
}

?>