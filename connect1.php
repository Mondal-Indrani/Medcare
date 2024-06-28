<?php

$username = $_POST['username'];
$password = $_POST['password'];


$con = new mysqli("localhost","root","","project");
if ($con->connect_error){
    die("Failed to Connect : ".$con->connect_error);
}
else{
$stmt = $con->prepare("select * from register where username = ?");
$stmt->bind_param("s",$username);
$stmt-> execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows > 0)
{
    $data = $stmt_result->fetch_assoc();
    if ($data['password']=== $password)
    { 
        echo "
        <script type='text/javascript'>alert('Login');
        window.location='l1.php';
        
        
        </script>";
        

        
    }
     else{}

 } 
            
            else {
        echo "
        <script type='text/javascript'>alert('Try again!! Invalid userid or Password');
        window.location='login.php';
        </script>";
        

            }
    
}
?>

