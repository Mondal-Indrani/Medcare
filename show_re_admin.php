<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awasome.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>Show reservation</title>
</head>
<body>



<?php
                    $con =new  mysqli("localhost","root","","project");

                    if(!$con){echo "database is not connected";}

                   else{

                            $query = "SELECT `r_id`, `p_name`, `email`, `phone`, `doctor`,`name`, `date`, `time`,`status` FROM `reservation`,`catagory` WHERE reservation.catagory = catagory.id;";
                            $query_run = mysqli_query($con,$query);
                           
                   
                   ?>



<hr><hr>
                                    <div class="table-responsive table-bordered p-3 ml-5">

                                        <table class="table p-2">
                                            <thead>
                                                <tr>
                                                    <th scope="col" >ID </th>
                                                    <th scope="col" >Patient Name </th>
                                                    <th scope="col" >Email </th>
                                                    <th scope="col" >Phone </th>
                                                    <th scope="col" >Doctor </th>
                                                    <th scope="col" >Catagory </th>
                                                    <th scope="col" >Date </th>
                                                    <th scope="col" >Time </th>
                                                    <th scope="col" >Status </th>
                                                    <th scope="col" >Action </th>

                                                    


                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php  

                                                if(mysqli_num_rows($query_run)>0){

                                                    while($row = mysqli_fetch_array($query_run)){
                                                        $id = $row['r_id'];
                                                        $p_name=$row['p_name'];
                                                        $email=$row['email'];
                                                        $phone=$row['phone'];
                                                        $doctor=$row['doctor'];
                                                        $name=$row['name'];
                                                        $date=$row['date']; 
                                                        $time = $row['time'];  
                                                        $status = $row['status'];
                                                        echo '
        <tr>
                    <td>'.$id.'</td>
                    <td>'.$p_name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$doctor.'</td>
                    <td>'.$name.'</td>
                    <td>'.$date.'</td>
                    <td>'.$time.'</td>
                    <td>'.$status.'</td>
                    <td><button class="btn btn-primary"><a href="accept1.php?acceptid='.$id.'" class="text-light">Confirm</a></button>
                    <button class="btn btn-danger"><a href="reject.php?rejectid='.$id.'" class="text-light">Reject</a></button>
                    <button class="btn btn-danger"><a href="complete.php?completeid='.$id.'" class="text-light">Completed</a></button>

                    </td>

                </tr>
        
        
        '; 

                                            ?>
                                                       <!-- code here -->
                                                    <?php 
                                                    }

                                                    }
                                                    else{
                                                        // echo "no data found";
                                                        ?>
                                                        <!-- <tr>
                                                            <td colspan="7">No data found</td>
                                                        </tr> -->
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
    
</body>
</html>