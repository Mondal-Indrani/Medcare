<?php include 'includes/header1.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<script src="./js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Insert</title>
</head>
<body>
    
<form action="" method="post" class="insert_form">
<hr>
        <h1 class="text-center">Add New Department </h1>
            <hr>

            <?php 

$conn = mysqli_connect("localhost","root","","project");

if (isset($_POST['add'])){
    $name = $_POST['name'];
    $code = $_POST['code'];
   

    foreach ($name as $key => $value){

        $add = "INSERT INTO dcatagory(name,code)VALUES('".$value."','".$code[$key]."')";

        $query = mysqli_query($conn,$add);
    }
}
?>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-4"><label for="name" class="text-center p-4 ml-5"> Enter Department Name </label> 
<input class="form-control" type="text" name="name[]" required id="" autofill="off" ></div>
        <div class="col-md-4"><label for="code" class="text-center p-4 ml-5"> Enter Department code </label> 
<input class="form-control" type="text" name="code[]" required id="" autofill="off" ></div>
        <div class="col-md-4">
<input class="btn btn-primary p-3 mt-5" type="submit" value="add" name="add" id="add" style="text-transform: uppercase;"></div>
    </div>
</div> -->


<!-- <a href="#" class="btn btn-primary" id="add">ADD DEPT</a> -->


</form>






<form action="" method="post" class="insert-form" id="insert_form">
    <hr>
        <h1 class="text-center">Enter Doctor Details </h1>
            <hr>
             


<?php 

$conn = mysqli_connect("localhost","root","","project");

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $catagory_id = $_POST['catagory_id'];
   

    foreach ($name as $key => $value){

        $save = "INSERT INTO dname(name,catagory_id)VALUES('".$value."','".$catagory_id[$key]."')";

        $query = mysqli_query($conn,$save);
    }
}
?>






<div class="container">
    <div class="row">
        <div class="col-md-4">
        <label for="code" class="text-center d-inline"> Choose Deperment </label> 

        <select name="catagory_id[]" class="from-control dropdown p-2" required="" id="">
    <option selected value="" class="w-100" >Select Department </option>
    <option value="Jalpaiguri">Jalpaiguri</option>
    
    </select>
        </div>
        <div class="col-md-4">
        <label for="code" class="text-center d-inline "> Enter Doctor Name </label> 
        <input class="form-control" type="text" name="name[]" required id="" autofill="off" >
        </div>
        <div class="col-md-4">

        <input class="btn btn-success d-inline" type="submit" name="save" id="save" value="save data">

        </div>
    </div>
</div>


</form>



</body>
</html>