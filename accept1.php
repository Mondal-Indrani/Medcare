<?php
include 'connection.php';
if(isset($_GET['acceptid'])){
    $id = $_GET['acceptid'];

    $sql = "UPDATE `reservation` SET `status`='Confirmed' WHERE r_id = '$id'; ";
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