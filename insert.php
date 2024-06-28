<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email= $_POST['email'];
$phonecode = $_POST['phonecode'];
$phone = $_POST['phone'];

if (!empty($username)|| !empty($password)||!empty($gender)||!empty($email)||!empty($phonecode)||!empty($phone))
{
$host = "localhost";
$dbUsername = "root";
$dbPassword = " ";
$dbname = "project";
// create a connection
$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
}
else{
    $SELECT = "SELECT email From register where email = ? Limit 1";
    $INSERT = "INSERT Into register (username, password, gender, email, phonecode, phone) values(?,?,?,?,?,?)";
    //prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum == 0){
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssssii", $username,$password,$gender,$email,$phonecode,$phone);
        $stmt->execute();
/* S- String
I - integer
username,password,gender,email -string
phonecode,phone -  integer
ssssii

*/


echo "New record Insertted Sucessfully";

    }
    else{
        echo "email Is Already registered";
    }

$stmt->close();
$conn ->close();

}
}
else
{
    echo "All fildes are required";
    die();
}


?>