



<?php

include 'connection.php';
$id = $_GET['updateid'];

$sql = "select * from `user` where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$district=$row['district'];
$state=$row['state'];
$pincode=$row['pincode'];


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];


$sql = "Update `user` set id=$id,name='$name',email='$email',phone='$phone',district='$district',state='$state',pincode='$pincode' where id='$id'";
$result = mysqli_query($conn,$sql);
if($result){
    header('location:index1.php');
    
    // echo "Data updated sucessfully";
}
else{
    die(mysqli_error($conn));}

}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awasome.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.min.js"></script>

    <title>update page</title>
</head>
<body>
    

<form action="" method="post" class="insert-form" id="insert_form">
    <hr>
        <h1 class="text-center">Enter Details Of Hospital </h1>
            <hr>
                <div class="input-field">
            <table class="table table-bordered" id="table_field">
                <tr>
                    <th>Hospital name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>District</th>
                    <th>State</th>
                    <th>pincode</th>
                </tr>


<tr>
    <td><input class="form-control" type="text" name="name" required=""  autofill="off" value=<?php print_r($name); ?> ></td>

    <td><input class="form-control" type="text" name="email" required="" autofill="off"  value=<?php echo $email;?> ></td>
    <td><input class="form-control" type="text" name="phone" required="" autofill="off"  value=<?php echo $phone;?> ></td>
    <td><input class="form-control" type="text" name="district" required="" autofill="off"  value=<?php echo $district;?> ></td>
    <td><input class="form-control" type="text" name="state"required=""  autofill="off"  value=<?php echo $state;?> ></td>
    <td><input class="form-control" type="text" name="pincode" required="" autofill="off"  value=<?php echo $pincode; ?> ></td>
    
</tr>

            </table>
            <center>
            <!-- <input class="btn btn-success" type="submit" name="update" id="save" value="save data"> -->
<button type="submit" class="btn btn-primary" name="submit">Update</button>

            </center>

                </div>
            </hr>
        
    </hr>
</form>



</body>
</html>