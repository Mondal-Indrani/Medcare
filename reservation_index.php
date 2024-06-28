
<?php include 'includes/user_header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $("#catagory").change(function(){
            var aid = $("#catagory").val();
            $.ajax({
                url: 'reservation_data.php',
                method : 'post',
                data : 'aid=' + aid
            }).done(function(doctor){
                console.log(doctor);
               doctor = JSON.parse(doctor);
                $("#doctor").empty();
                doctor.forEach(function(d)
            
                {
                    $('#doctor').append('<option>' + d.name + '</option>')
                })
            })
        })
    })


</script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
<div class="container">
        <hr>
        
        <div class="d-flex justify-content-start">

            <a href="user_search.php" class="btn btn-primary  "> BACK </a>
        </div>

        <hr>
        <div class="col d-flex justify-content-center">
        <div class="card">
<div class="card-header">
<h1 class="text-center">Reservation Form </h1>

</div>
<div class="card-body">

        <div class="row">

            <form action="reservation_data_insert.php" method="post">
                <div class="col">
                    <label for="P_name">Patient name</label>
    <!-- <input class="form-control" type="text" name="p_name" required="" id="" autofill="off" > -->
    <!-- .................  -->
    <select name="p_name" class="form-control" > 
                            <option selected disabled>
                                <?php
                            //session_start();
                    
                            echo "  ". $_SESSION['username'];
                            ?> 
                            </option>
    </select>
<!-- .............  -->
                </div>
                
                <div class="col">
                    
                    <label for="Email" class="p-2">Email</label>
    <input class="form-control" type="text" name="email" required="" id="" autofill="off" placeholder="enter email" >

                </div>

                <div class="col">
                    <label for="Phone">Phone</label>
    <input class="form-control" type="text" name="phone" required="" id="" autofill="off" maxlength="10" pattern="[0-9]{10}">

                </div>
                    <div class="col">
                    <div class="form-group"><label for="catagory"> Choose catagory</label>
                        <select name="catagory" id="catagory" class="form-control" required="TRUE"> 
                            <option selected disabled>Select catagory </option>
                    <?php

                    require 'reservation_data.php';

                    $catagory = loadcatagory();
                    foreach ($catagory as $cat){
                        echo "<option id='".$cat['id']."' value = '".$cat['id']."'>" . $cat['name']."</option>";
                    }
        
                    
                    ?>
                
                    
                    </select>
                    </div>


              <div class="col">
                    <div class="form-group"><label for="doctor"> Choose Doctor </label>
                        <select name="doctor" id="doctor" class="form-control" required>     </select>
                </div>
              </div>

              <div class="col">
              <label for="Date">Choose Date</label>
              <input class="form-control" type="date" name="date" required id="" autofill="off"  >
              </div>

            <div class="col">
            <label for="Time">Choose Time</label> 
              <input class="form-control" type="time" name="time" required id="" autofill="off"  >
            </div>

                    </div>
                    <br>
                    <input type="hidden" id="status" name="status" value="pending" >

<input class="btn btn-success mt-2" type="submit" name="save" id="save" value="Request For Appointment">

               
            </form>
                </div>
    </div>
</div>
        </div>
</div>
<!-- ................................  -->




</body>
</html>