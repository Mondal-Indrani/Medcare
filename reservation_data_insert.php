<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
session_start();
$p_name = $_SESSION['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$catagory = $_POST['catagory'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];
$status = $_POST['status'];



$conn = NEW mysqli('localhost','root','','project');


if(!$conn){
    die ("Error: Could not Connect." .mysqli_connect_error());
}



// $sql = "INSERT INTO insert_doctor_details (catagory,doctor,h) VALUES ('$catagory','$doctor','$h')";
$sql = "INSERT INTO reservation(p_name,email,phone,catagory,doctor,date,time,status)VALUES('$p_name','$email','$phone','$catagory','$doctor','$date','$time','$status')";


if(mysqli_query($conn,$sql)){
    echo " Data  store sucessfully";

    // echo ("\n$catagory \n$doctor");
    echo "
        <script type='text/javascript'>alert('Your Request is Now Pending.... We will Notify after Appoint sucessfull');
        window.location='user_search.php';
        
        </script>";
}
else{
    "Error". mysqli_error($conn);
}

mysqli_close($conn);
?>




</body>
</html>