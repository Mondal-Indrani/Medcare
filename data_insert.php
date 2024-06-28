<?php
$hospital = $_POST['hospital'];
$department = $_POST['catagory'];
$treatment = $_POST['doctor'];
$price = $_POST['price'];
$conn = new mysqli('localhost','root','','project');
if(!$conn){echo "Database is not connected";}
else{
$query = "INSERT INTO `hospital`(`h_dep`, `h_treat`, `treat_price`,`h_name`) VALUES ('$department','$treatment','$price','$hospital')";
$query_run= mysqli_query($conn,$query);
if($query_run)
{
    echo "
        <script type='text/javascript'>alert('Data Inserted');
        window.location='data_insert_form.php';
        
        
        </script>";
}
else {
    echo "Error";
}
}


?>