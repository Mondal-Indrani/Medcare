<?php include 'includes/header1.php'; ?>


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

    <title>Document</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">

                <h4 class="card-title">Search Hospital</h4>
                        </div>

                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <form action="" method="post">
                        <div class="form-group d-flex justify-content-center">
                            <!-- <input type="text" class="form-control" name="get_state" placeholder="enter state" require> -->
                            <!-- <input type="text" class="form-control" name="get_district" placeholder="enter district" require> -->
                            <div class="col-md-4"><label> State:  </label>
                            <select name="get_state" class="dropdown p-2" require id="">
    <option selected value="West Bengal" class="w-100" >West Bengal   </option>
    </select></div>
    
    <div class="col-md-4">
    <label> District:  </label>
    <select name="get_district" class="dropdown p-2" require id="">
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
    </div>

   
<div class="col-md-4">

<label>Pincode:</label> <input type="text" class="form-control" name="get_pincode" placeholder="enter pincode" > 

</div>
                        
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" name="search_by_id">Search</button>
                        <button class="btn btn-primary" ><a href="index1.php" class="text-light">Home</a></button>
                        <button  class="btn btn-primary">Reset</button>

                    </form>
                    </div>
                    
                </div>

                    <?php
                    $con =new  mysqli("localhost","root","","project");

                    if(!$con){echo "database is not connected";}

                    if(isset($_POST['search_by_id']))
                    {
                        // echo "okay";
                    $state =$_POST['get_state'];
                    $district =$_POST['get_district'];
                    $pincode =$_POST['get_pincode'];

                            $query = "SELECT * FROM `user` WHERE (state = '$state' AND district ='$district') OR (pincode = '$pincode');";
                            $query_run = mysqli_query($con,$query);
                           
                    ?>



<hr><hr>
                                    <div class="table-responsive table-bordered">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <!-- <th scope="col" >ID </th> -->
                                                    <th scope="col" >Name </th>
                                                    <!-- <th scope="col" >Email </th> -->
                                                    <!-- <th scope="col" >Phone </th> -->
                                                    <th scope="col" >State </th>
                                                    <th scope="col" >District </th>
                                                    <th scope="col" >Pincode </th>
                                                    <th scope="col" >Action </th> 
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php  

                                                if(mysqli_num_rows($query_run)>0){

                                                    while($row = mysqli_fetch_array($query_run)){

                                            ?>
                                                        <tr>
                                                        
                                                            <!-- <td><?php echo $row['id']; ?> </td> -->
                                                            <td><?php echo $row['name']; ?> </td>
                                                            <!-- <td><?php echo $row['email']; ?> </td> -->
                                                            <!-- <td><?php echo $row['phone']; ?> </td> -->
                                                            <td><?php echo $row['state']; ?> </td>
                                                            <td><?php echo $row['district']; ?> </td>
                                                            <td><?php echo $row['pincode']; ?> </td>
                                                            <td> <button disabled="disabled">view more </button> </td>
                                                        </tr>
                                                    <?php 
                                                    }

                                                    }
                                                    else{
                                                        // echo "no data found";
                                                        ?>
                                                        <tr>
                                                            <td colspan="7">No data found</td>
                                                        </tr>
                                                        <?php
                                                    }    
                                                    ?>



                                                    </tbody>
                                        </table>
                                    </div>
                                    <?php 
                                    
                                                }
                                    ?>

                </div>



            </div>
        </div>
    </div>
</div>




    
</body>
</html>