
<?php include 'includes/header1.php'; ?>


<?php include 'connection.php'

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
    <title> New Record Insert
    </title>
</head>
<body>


<div class="container">
    <marquee behavior="" direction="left" speed="100">Admisistration only </marquee>
    <a href="display.php" class="btn btn-warning">Display Data</a>
    <a href="index.php" class="btn btn-warning">Log Out</a>
    <a href="doctor_insert.php" class="btn btn-warning">Doctor Details</a>
    <a href="show_re_admin.php" class="btn btn-warning">Reservation Details</a>
    <a href="data_insert_form.php" class="btn btn-warning">Data Insert for Price Details</a>




    


<form action="" method="post" class="insert-form" id="insert_form">
    <hr>
        <h1 class="text-center">Enter Details Of Hospital </h1>
            <hr>
                <div class="input-field">
            <table class="table table-bordered" id="table_field">
                <tr>
                    <th>Hospital name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Pincode</th>
                </tr>


<?php 

// $conn = mysqli_connect("localhost","root","","B");

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $pincode = $_POST['pincode'];

    foreach ($name as $key => $value){

        $save = "INSERT INTO user(name,email,phone,state,district,pincode)VALUES('".$value."','".$email[$key]."','".$phone[$key]."','".$state[$key]."','".$district[$key]."','".$pincode[$key]."')";

        $query = mysqli_query($conn,$save);
    }
}
?>
<tr>
    <td><input class="form-control" type="text" name="name[]" required="" id="" autofill="off" ></td>
    <td><input class="form-control" type="text" name="email[]" required="" id="" autofill="off" ></td>
    <td><input class="form-control" type="text" name="phone[]" required="" id="" autofill="off" maxlength="10" pattern="[0-9]{10}"></td>
    <!-- <td><input class="form-control" type="text" name="state[]"required=""  id="" autofill="off" ></td> -->
    <td><select name="state[]" class="dropdown p-2" required id="">
    <option selected value="West Bengal" class="w-100" >West Bengal</option>
    </select>
</td>
    
    <!-- <td><input class="form-control" type="text" name="district[]" required="" id="" autofill="off" ><select name="district[]" class="dropdown p-2" required id="">
    <option selected value="" class="w-100" >Midnapore </option></select></td> -->
    <td><select name="district[]" class="from-control dropdown p-2" required="" id="">
    <option selected value="" class="w-100" >Select District </option>
    <option value="Jalpaiguri">Jalpaiguri</option>
    <option value="Bankura">Bankura</option>
    <option value="purulia">purulia</option>
    <option value="Murshidabad">Murshidabad</option>
    <option value="Nadia">Nadia</option>
    <option value="Malda">Malda</option>
    <option value="Darjeeling">Darjeeling</option>
    <option value="Hoogly">Hoogly</option>
    <option value="Paschim Midnapore">Paschim Midnapore</option>
    <option value="Purba Midnapore">Purba Midnapore</option>
    <option value="Bardhaman">Bardhaman</option>
    </select>

</td>




    <td><input class="form-control" type="text" name="pincode[]" required id="" autofill="off" maxlength="6" pattern="[0-9]{6}" ></td>
    <!-- <td><input class="btn btn-warning" type="button" name="add" id="add" value="ADD"> </td> -->
</tr>

            </table>
            <center>
            <input class="btn btn-success" type="submit" name="save" id="save" value="save data">
            </center>

                </div>
            </hr>
        
    </hr>
</form>

<!-- showing data  -->

<table class ="table table-stripep ">
<tr>    
    
                    <th> ID </th>
                    <th>Hospital name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>District</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Operation</th>
</tr>
<?php 
$select = "SELECT * FROM user ORDER BY id DESC";
$result = mysqli_query($conn,$select);
while($row = mysqli_fetch_array($result)){
 

$id = $row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $district=$row['district'];
        $state=$row['state'];
        $pincode=$row['pincode'];
        echo '
        <tr>
        <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$district.'</td>
                    <td>'.$state.'</td>
                    <td>'.$pincode.'</td>
                    <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>

                </tr>
        
        
        '; ?>
    

        <?php
        }
        ?>

</table>

        </div>
   



</body>
</html>