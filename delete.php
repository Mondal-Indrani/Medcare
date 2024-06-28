<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `user` WHERE id=$id;";
    $result = mysqli_query($conn,$sql);
    if ($result){
        //echo "deleted sucessfully";
        header('location:index1.php');
    }

    else {
        die(mysqli_error($conn));
    }
}

?>