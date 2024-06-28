<?php
session_start();
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
        $_SESSION['username']= $username;

        echo "
        <script type='text/javascript'>alert('Login');
        window.location='user_search.php';
        
        
        </script>";
        
        
    }
     else{
       echo "
        <script type='text/javascript'>alert('Try again!! Invalid userid or Password');
        window.location='user_login.php';
        </script>";
     }

 } 
            
            else {
        echo "
        <script type='text/javascript'>alert('Try again!! Invalid userid or Password');
        window.location='user_login.php';
        </script>";
        

            }
    
}
?>

