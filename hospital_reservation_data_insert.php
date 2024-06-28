<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Data</title>
</head>
<body>
    

<?php
$dip_id = $_POST['catagory'];
$treat = $_POST['doctor'];
// $price = $_POST['price'];

?>
<?php
//echo $dip_id;
//echo $treat;
?>

<?php
$conn = NEW mysqli('localhost','root','','project');


if(!$conn){
    die ("Error: Could not Connect." .mysqli_connect_error());
}




// $sql = "SELECT `dep`,`price`,`treat`,`dip_name` FROM `treatment`,`department` WHERE department.dip_id = treatment.dep AND department.dip_id = '$dip_id' AND treatment.treat = '$treat' ORDER BY price DESC";
$sql = "SELECT `dip_name`, `h_treat`, `treat_price`, `h_name` FROM `hospital`,`department` WHERE hospital.h_dep = department.dip_id AND department.dip_id = '$dip_id' AND hospital.h_treat='$treat' ORDER BY treat_price ASC";

$query_run = mysqli_query($conn,$sql);

?>
<div class="card">
    <div class="card-header bg-info">
<div class="table-responsive table-bordered">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" >Hospital Name </th>
                                                    <th scope="col" >Dep name </th>
                                                    <!-- <th scope="col" >Email </th> -->
                                                    <!-- <th scope="col" >Phone </th> -->
                                                    <th scope="col" >Traet </th>
                                                    <th scope="col" >price </th>
                                                    <!-- <th scope="col" >Pincode </th> -->
                                                    <!-- <th scope="col" >Action </th>  -->
                                                </tr>
                                            </thead>
                                            </div>
                                            <div class="card-body bg-warning">

                                            
                                            <tbody>

                                            <?php  

                                                if(mysqli_num_rows($query_run)>0){

                                                    while($row = mysqli_fetch_array($query_run)){

                                            ?>
                                                        <tr>
                                                        
                                                            
                                                            <td><?php echo $row['h_name']; ?> </td>
                                                            <td><?php echo $row['dip_name']; ?> </td>

                                                            <td><?php echo $row['h_treat']; ?> </td>
                                                            <td><?php echo $row['treat_price']; ?> </td>
                                                            
                                                        </tr>
                                                    <?php 
                                                    }

                                                    }
                                                    else{
                                                        // echo "no data found";
                                                        ?>
                                                        <tr>
                                                            <td colspan="4">No data found</td>
                                                        </tr>
                                                        <?php
                                                    }    
                                                    ?>

                                                    </tbody>
                                        </table>
                                        <a href="hospital_search_index.php" class="btn btn-success">Close</a>
                                    </div>
                                    <?php 
                                    
                                                
                                    ?>

                </div>


                </div>
    
                </div>

</body>
</html>